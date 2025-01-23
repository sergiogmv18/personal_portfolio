import 'dart:developer';
import 'package:flutter/material.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:flutter_svg/flutter_svg.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/views/components/menu.dart';
import 'package:personal_portfolio/views/components/toast.dart';
import 'package:provider/provider.dart';
import 'package:url_launcher/url_launcher.dart';

class HearderCustom extends StatelessWidget {
  final int index;
  const HearderCustom({super.key, this.index = 1});

  @override
  Widget build(BuildContext context) {
    final displayLocal = Provider.of<LocaleFixed>(context).locale;
    return Container(
      color: CustomColor.color1,
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
              color: CustomColor.black, 
              iconSize: 40
            )),  
          ],
// LINKEDIN
          IconButton(
            color: CustomColor.white,
            highlightColor: CustomColor.color1,
            hoverColor: CustomColor.color3,
            tooltip:"Linkedin",
            onPressed:()async{
              if (await canLaunchUrl(Uri.parse(RoutesPath.linkedin))) {
                await launchUrl(
                  Uri.parse(RoutesPath.linkedin),
                  webViewConfiguration: const WebViewConfiguration(),
                );
              } else {
                showTopSnackBar(
                  context:context,
                  message:translate('error when redirecting', locale: displayLocal),
                  type: MessageType.error,
                );
              }
            },
            icon:FaIcon(FontAwesomeIcons.linkedin)
          ),
// GITHUB
          IconButton(
            color: CustomColor.white,
            highlightColor: CustomColor.color1,
            hoverColor: CustomColor.color3,
            tooltip:"GitHub",
            onPressed:()async{
              if (await canLaunchUrl(Uri.parse(RoutesPath.gitHub))) {
                await launchUrl(
                  Uri.parse(RoutesPath.gitHub),
                  webViewConfiguration: const WebViewConfiguration(),
                );
              } else {
                showTopSnackBar(
                  context:context,
                  message:translate('error when redirecting', locale: displayLocal),
                  type: MessageType.error,
                );
              }
            },
            icon:FaIcon(FontAwesomeIcons.github)
          ),
// MENU
          if(Responsive.isDesktop(context))...[
            Spacer(),
            HeaderWebMenu(displayLocal: displayLocal,  index:index),
            SizedBox(width: 40),
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
                icon:SvgPicture.asset(
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
                icon:SvgPicture.asset(
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