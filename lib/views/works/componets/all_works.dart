import 'package:auto_size_text/auto_size_text.dart';
import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/controllers/work_controller.dart';
import 'package:personal_portfolio/entities/projects.dart';
import 'package:personal_portfolio/views/components/circular_loading.dart';
import 'package:personal_portfolio/views/components/custom_button.dart';
import 'package:personal_portfolio/views/components/toast.dart';
import 'package:personal_portfolio/views/works/componets/projects_imagen.dart';
import 'package:provider/provider.dart';
import 'package:url_launcher/url_launcher.dart';

class AllWorks extends StatelessWidget {
  const AllWorks({super.key});

  @override
  Widget build(BuildContext context) {
    return Container(
      constraints: BoxConstraints(
        maxWidth:kMaxWidth
      ),
      child: Column(
        children: [
          FutureBuilder(
            future: WorkController().getAllWorks(),
            builder: (context, app) {
              if (app.connectionState == ConnectionState.done) {
                List<Projects>? allProjects = app.data;
                if (allProjects != null && allProjects.isNotEmpty) {
                  return Wrap(
                    spacing: 20,
                    runSpacing: 20,
                    children: List.generate(allProjects.length, (index) {
                      return  Container(
                        //color: CustomColor.color4,
                        width: MediaQuery.of(context).size.width,
                        padding:Responsive.isMobile(context) ? EdgeInsets.only(top: 10, bottom: 10): EdgeInsets.only(top: 30, bottom: 30),
                        child: Container(
                          constraints: BoxConstraints(
                            maxWidth:kMaxWidth
                          ),
                          child: Column(
                            children: [
                                Wrap(
                                crossAxisAlignment: WrapCrossAlignment.center,
                                children: [
                                  ProjectsImagen(photoPath: allProjects[index].getPhotoPath()!),
                                  
                                  Container(
                                    width: Responsive.isMobile(context) ? MediaQuery.of(context).size.width : 400,
                                    padding: EdgeInsets.only(left: 10, right: 10),
                                    child:Column(
                                      mainAxisAlignment: MainAxisAlignment.start,
                                      crossAxisAlignment: CrossAxisAlignment.start,
                                      spacing: 10,
                                      children: [
                                  
                                      AutoSizeText(
                                        allProjects[index].getName()!,
                                        maxLines: 1,
                                        textAlign:TextAlign.start,
                                        style:Theme.of(context).textTheme.headlineLarge!.copyWith(
                                          fontWeight: FontWeight.bold,
                                          color: CustomColor.black, 
                                        ),
                                      ),
                                      AutoSizeText(
                                        translate(allProjects[index].getDescriptions()!, locale: Provider.of<LocaleFixed>(context).locale),
                                        maxLines: 6,
                                        textAlign:TextAlign.start,
                                        style:Theme.of(context).textTheme.titleMedium!.copyWith(
                                          color: CustomColor.color3, 
                                        // fontWeight: FontWeight.bold,
                                        ),
                                      ),                       
//BUTTON
                                      CustomButton(
                                        onPressed:()async{
                                          if (await canLaunchUrl(Uri.parse(allProjects[index].getUrl()!))) {
                                            await launchUrl(
                                              Uri.parse(allProjects[index].getUrl()!),
                                              webViewConfiguration: const WebViewConfiguration(),
                                            );
                                          } else {
                                            showTopSnackBar(
                                              context:context,
                                              message:translate('error when redirecting', locale: Provider.of<LocaleFixed>(context).locale),
                                              type: MessageType.error,
                                            );
                                          }
                                        }, 
                                        child: Text(
                                          '🔜 ${translate('visit Website', locale: Provider.of<LocaleFixed>(context).locale)}',
                                          style:Theme.of(context).textTheme.titleMedium!.copyWith(
                                            color: CustomColor.white, 
                                            letterSpacing: 1.2,
                                          ),
                                        ),
                                      ),
                                    ]),
                                  ),
                                ],
                              ),
                            ],
                          )
                        )
                      );
                    }),
                  ); 
                }
                return Text(
                  translate('check your internet and try again', locale: Provider.of<LocaleFixed>(context).locale),
                  style: Theme.of(context).textTheme.titleMedium,
                  textAlign: TextAlign.center,
                );
              }
              return circularProgressIndicator(context);
            },
          ),
        ],
      ),
    );
  }
}