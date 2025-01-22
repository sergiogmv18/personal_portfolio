import 'dart:developer';

import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:flutter_svg/flutter_svg.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/views/components/toast.dart';
import 'package:provider/provider.dart';
import 'package:url_launcher/url_launcher.dart';

class HearderCustom extends StatelessWidget {
  const HearderCustom({super.key});

  @override
  Widget build(BuildContext context) {
    final displayLocal = Provider.of<LocaleFixed>(context).locale;
    return Container(
      color: CustomColor.black,
      height: 50,
      width: MediaQuery.of(context).size.width,
      child: Row(
        mainAxisAlignment: Responsive.isDesktop(context) ? MainAxisAlignment.center : MainAxisAlignment.spaceBetween,
        crossAxisAlignment: CrossAxisAlignment.center,
        children: [
          if (!Responsive.isDesktop(context))...[
            Builder(builder: (context) => IconButton(
              onPressed: () {
                Scaffold.of(context).openDrawer();
              },
              icon:const Icon(Icons.menu), 
              color: CustomColor.white, 
              iconSize: 40
            )),  
          ],
          Text.rich(
            TextSpan(
              children:[
                TextSpan(
                  text: translate('', locale: displayLocal),
                  style: Theme.of(context).textTheme.titleMedium!.copyWith(color: CustomColor.white, fontWeight: FontWeight.normal),
                ),
                WidgetSpan(
                  child: GestureDetector(
                    onTap: () async{
                    showTopSnackBar(
                            context:context,
                            message:'Por favor, complete todos los campos antes de continuar',
                            type: MessageType.warning,
                          );
                      //Clipboard.setData(const ClipboardData(text: phoneNumberOnWheels)); // Copia el texto al portapapeles
                      ScaffoldMessenger.of(context).showSnackBar(
                        const SnackBar(content: Text('text copied to clipboard')),
                      );   
                    },
                    child: Text(
                      ':',
                      style: Theme.of(context).textTheme.titleMedium!.copyWith(
                        color: CustomColor.warning, 
                      ),
                      textAlign: TextAlign.start,
                    ),
                  ),
                  
                ),
                const WidgetSpan(
                  child:SizedBox(width: 40), 
                ),
                if(!Responsive.isMobile(context))...[
                  TextSpan(
                  text: translate('hours today', locale: displayLocal).toUpperCase(),
                  style: Theme.of(context).textTheme.titleMedium!.copyWith(color: CustomColor.white, fontWeight: FontWeight.normal),
                  ),
                  TextSpan(
                    text:':',
                    style: Theme.of(context).textTheme.titleMedium!.copyWith(color: CustomColor.white),
                  ),
                  const WidgetSpan(
                    child:SizedBox(width: 60), 
                  ),
                ],
                
              ],
            ),
          ),
// MAP REDIRECT
          if(Responsive.isDesktop(context))...[
            TextButton.icon(
              onPressed:()async{
                String url = 'https://www.google.com/maps/place/On+Wheels+Auto+Sales/@35.5252448,-78.5548614,15z/data=!4m6!3m5!1s0x89ac7baab81d9bd1:0xbeadfc0434c7a078!8m2!3d35.5252448!4d-78.5548614!16s%2Fg%2F11ss8jttkg?entry=ttu';
                if (await canLaunchUrl(Uri.parse(url))) {
                  await launchUrl(
                    Uri.parse(url),
                    webViewConfiguration: const WebViewConfiguration(),
                  );
                } else {
                  ScaffoldMessenger.of(context).showSnackBar(
                    SnackBar(content: Text(translate('error when redirecting', locale: displayLocal))),
                  );
                }
              },  
              label:Text(
                translate('map', locale: displayLocal),
                style: Theme.of(context).textTheme.titleMedium!.copyWith(color: CustomColor.white),
              ),
              icon: Icon(
                FontAwesomeIcons.locationDot,
                color: CustomColor.white,
                size: 22,
              ),
            ),
            const SizedBox(width: 60), 
          ],
          Row(
            mainAxisSize: MainAxisSize.min,
            children: [
// CHANGE LANGUGE EN
              IconButton(
                onPressed: (){
                  if(const Locale('en') != displayLocal){ 
                    Provider.of<LocaleFixed>(context, listen: false).locale = const Locale('en');
                  }
                }, 
                icon: SvgPicture.asset(
                  ImageAssets.flagUs,
                  height: 20,
                  fit:BoxFit.fitHeight,
                ),
                tooltip: translate('change language to english', locale:displayLocal),
                iconSize: 20,
              ), 
    // CHANGE LANGUGE ES
              IconButton(
                onPressed: (){
                  if(const Locale('es') != displayLocal){ 
                    Provider.of<LocaleFixed>(context, listen: false).locale = const Locale('es');
                  log(displayLocal.languageCode);
                  }
                }, 
                icon: SvgPicture.asset(
                  ImageAssets.flagEs,
                  height: 20,
                  fit:BoxFit.fitHeight,
                ),
                tooltip:translate("change language to spanish", locale: displayLocal),
                iconSize: 20,
              ),
            ],
          ),

        ],
      ),
    );
  }
}