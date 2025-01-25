import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/controllers/work_controller.dart';
import 'package:personal_portfolio/entities/projects.dart';
import 'package:personal_portfolio/views/components/circular_loading.dart';
import 'package:provider/provider.dart';

class AllWorkResume extends StatelessWidget {
  const AllWorkResume({super.key});

  @override
  Widget build(BuildContext context) {
    return Container(
    constraints: BoxConstraints(
      maxWidth:kMaxWidth
    ),
    child:SingleChildScrollView(
      scrollDirection:Axis.horizontal,
      child: FutureBuilder(
        future: WorkController().getAllWorks(),
        builder: (context, app) {
          if (app.connectionState == ConnectionState.done) {
            List<Projects>? allProjects = app.data;
            if (allProjects != null && allProjects.isNotEmpty) {
              return Row(
                spacing: 20,
                children: List.generate(allProjects.length, (index) {
                  return Image.asset(
                    allProjects[index].getLogo()!,
                    width: Responsive.isMobile(context)?MediaQuery.of(context).size.width *0.8  : 150,
                    //height:100,
                    filterQuality: FilterQuality.high,
                  );
                  // return Container(
                  //   child: Row(
                  //     children: [
                        
                        // Container(
                        //   decoration: BoxDecoration(
                        //     //shape:BoxShape.circle,
                        //     borderRadius: BorderRadius.circular(kBorderRadius),
                        //     image:DecorationImage(
                        //       image: AssetImage(allProjects[index].getLogo()!),
                        //       //fit: BoxFit.fill,
                        //     )
                        //   ),
                        //   width:100,
                        //   height:70,
                        //   padding: EdgeInsets.all(3),
                        // ),
                          
                        // AutoSizeText(
                        //   allProjects[index].getName()!,
                        //   maxLines: 1,
                        //   textAlign:TextAlign.start,
                        //   style:Theme.of(context).textTheme.bodyMedium!.copyWith(
                        //     fontWeight: FontWeight.bold,
                        //     color: CustomColor.black, 
                        //   ),
                        // ),
                  //     ]
                  //   ),
                  // );
                })
              );
            }
            return Text(
              translate('check your internet and try again', locale: Provider.of<LocaleFixed>(context).locale),
              style: Theme.of(context).textTheme.titleMedium,
              textAlign: TextAlign.center,
            );
          }
          return circularProgressIndicator(context);
        })
      )
    ); 
  }
}