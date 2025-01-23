import 'package:auto_size_text/auto_size_text.dart';
import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/views/components/custom_button.dart';
import 'package:personal_portfolio/views/components/drawer.dart';
import 'package:personal_portfolio/views/components/hearder.dart';
import 'package:personal_portfolio/views/components/profile_photo.dart';
import 'package:personal_portfolio/views/components/toast.dart';
import 'package:personal_portfolio/views/skills/skills_screen.dart';
import 'package:provider/provider.dart';
import 'package:url_launcher/url_launcher.dart';

class HomeScreen extends StatefulWidget {
  const HomeScreen({super.key});

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  final int index = 1;
  @override
  void initState() {
    super.initState();

  }
  
  @override
  Widget build(BuildContext context) {
    final displayLocal = Provider.of<LocaleFixed>(context).locale;
    return Scaffold(
      backgroundColor:CustomColor.white,
      drawer: drawerComponent(context, displayLocal: displayLocal, index:index),
      body: SingleChildScrollView(
        child: Column(
          mainAxisSize: MainAxisSize.min,
          children: [
            HearderCustom(index: index),
// ABOUT 
            Container(
              color: CustomColor.color4,
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
                        SizedBox(
                          width: Responsive.isMobile(context) ? MediaQuery.of(context).size.width : 400,
                          child: ProfilePhoto(),
                        ),
                        Container(
                          width: Responsive.isMobile(context) ? MediaQuery.of(context).size.width : 400,
                          padding: EdgeInsets.only(left: 10, right: 10),
                          child:Column(
                            mainAxisAlignment: MainAxisAlignment.start,
                            crossAxisAlignment: CrossAxisAlignment.start,
                            spacing: 10,
                            children: [
                            AutoSizeText(
                              translate("hello, my name is", locale: displayLocal),
                              maxLines: 1,
                              textAlign:TextAlign.start,
                              style:Theme.of(context).textTheme.titleMedium!.copyWith(
                                color: CustomColor.white, 
                              ),
                            ),
                            AutoSizeText(
                              fullName,
                              maxLines: 1,
                              textAlign:TextAlign.start,
                              style:Theme.of(context).textTheme.headlineLarge!.copyWith(
                                fontWeight: FontWeight.bold,
                                color: CustomColor.white, 
                              ),
                            ),
                            AutoSizeText(
                              translate("i'm a full-stack developer specializing in web and mobile solutions. With over 5 years of experience, I build scalable and responsive apps using PHP, Laravel, Flutter, and modern front-end technologies. My international experience in Switzerland, Chile, and the USA enhances my ability to deliver innovative solutions with a global perspective. Curious about my work? Explore my projects and let’s collaborate!", locale: displayLocal),
                              maxLines: 6,
                              textAlign:TextAlign.start,
                              style:Theme.of(context).textTheme.titleMedium!.copyWith(
                                color: CustomColor.white, 
                              // fontWeight: FontWeight.bold,
                              ),
                            ),                       
//BUTTON CURRICULUM
                            CustomButton(
                              onPressed:()async{
                                if (await canLaunchUrl(Uri.parse(RoutesPath.curriculum))) {
                                  await launchUrl(
                                    Uri.parse(RoutesPath.curriculum),
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
                              child: Text(
                                '📄${translate('my Resume', locale: displayLocal)}',
                                style:Theme.of(context).textTheme.titleMedium!.copyWith(
                                color: CustomColor.white, 
                                letterSpacing: 1.2,
                              // fontWeight: FontWeight.bold,
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
            ),
// SKILLS
            SizedBox(height:kPadding*2),
            SkillsScreen(),
            
          ],
        ),
      ),
    );
  }
}