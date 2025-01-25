import 'package:auto_size_text/auto_size_text.dart';
import 'package:email_validator/email_validator.dart';
import 'package:flutter/material.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:go_router/go_router.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/views/components/circular_loading.dart';
import 'package:personal_portfolio/views/components/custom_button.dart';
import 'package:personal_portfolio/views/components/drawer.dart';
import 'package:personal_portfolio/views/components/footer.dart';
import 'package:personal_portfolio/views/components/hearder.dart';
import 'package:personal_portfolio/views/components/text_form_field.dart';
import 'package:personal_portfolio/views/components/title.dart';
import 'package:personal_portfolio/views/components/toast.dart';
import 'package:provider/provider.dart';
import 'package:url_launcher/url_launcher.dart';

class ContactScreen extends StatefulWidget {
  const ContactScreen({super.key});

  @override
  State<ContactScreen> createState() => _ContactScreenState();
}

class _ContactScreenState extends State<ContactScreen> {
  final int index = 3;
  final formKey = GlobalKey<FormState>();
  TextEditingController fullNameController = TextEditingController();
  TextEditingController emailAddressController = TextEditingController();
 TextEditingController descriptionController = TextEditingController();
  

  @override
  Widget build(BuildContext context) {
 final displayLocal = Provider.of<LocaleFixed>(context).locale;
    return Scaffold(
      backgroundColor:CustomColor.white,
      drawer: drawerComponent(context, displayLocal: displayLocal, index:index),
      body: SingleChildScrollView(
        child:SizedBox(
          width: MediaQuery.of(context).size.width,
          child:Container(
            constraints: BoxConstraints(
              maxWidth:kMaxWidth
            ),
            child: Column(
              mainAxisSize: MainAxisSize.min,
              children: [
                HearderCustom(index:index),
                SizedBox(height:kPadding*2),
                TitlePage(title: 'contact'),
                SizedBox(height:kPadding),
// RESUME 
                Card(
                  color:const Color.fromARGB(255, 201, 219, 227),
                  elevation: 3,
                  shape:BeveledRectangleBorder(
                    borderRadius: BorderRadius.circular(kBorderRadius),
                  ),
                  child:  Container(
                    padding: EdgeInsets.all(22),
                    width: kMaxWidth /2,
                    constraints: BoxConstraints(
                      maxWidth:kMaxWidth /2
                    ),
                    decoration: BoxDecoration(
                      borderRadius: BorderRadius.circular(kBorderRadius),
                      color: CustomColor.black
                    ),
                    child:Column(
                      children: [
                        Text.rich(
                          textAlign: TextAlign.center,
                          TextSpan(
                            children:[
                              TextSpan(
                                text: translate("i am currently available for freelance work. If you are interested in hiring me for your project, please feel free to use the form below to get in touch. Would you like to learn more about my approach and what I can offer? I invite you to explore", locale:displayLocal),
                                style: Theme.of(context).textTheme.titleSmall!.copyWith(color: CustomColor.white),
                              ),
                              WidgetSpan(
                                alignment: PlaceholderAlignment.middle,
                                child: GestureDetector(
                                  onTap: () async{
                                    context.goNamed(RoutesPath.routeWorks); 
                                  },
                                  child:MouseRegion(
                                    cursor: SystemMouseCursors.click,
                                    child: Text(
                                      ' ${translate("my works",locale: displayLocal)} ',
                                      style: Theme.of(context).textTheme.titleSmall!.copyWith(color: CustomColor.yellow),
                                    )
                                  ),
                                ),
                              ),
                              TextSpan(
                                text: translate("and", locale: displayLocal),
                                style: Theme.of(context).textTheme.titleSmall!.copyWith(color: CustomColor.white)
                              ),
                              WidgetSpan(
                                alignment: PlaceholderAlignment.middle,
                                child: GestureDetector(
                                  onTap: ()async{
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
                                  child:MouseRegion(
                                    cursor: SystemMouseCursors.click,
                                    child: Text(
                                      ' ${translate("resume.", locale: displayLocal, capitilize: false)}',
                                      style: Theme.of(context).textTheme.titleSmall!.copyWith(color: CustomColor.yellow),
                                    )
                                  ),
                                ),
                              ),
                            ]
                          )
                        ),
                        SizedBox(height:kPadding),
                        AutoSizeText(
                          translate("you can also connect with me through the following channels.", locale:  Provider.of<LocaleFixed>(context).locale).allInCaps,
                          maxLines: 1,
                          textAlign:TextAlign.center,
                          style:Theme.of(context).textTheme.titleSmall!.copyWith(
                            color: CustomColor.white,  
                            fontWeight: FontWeight.bold
                          ),
                        ),
                      //  SizedBox(height:kPadding),
                        Wrap(
                          children: [
// LINKEDIN
                            IconButton(
                              color: CustomColor.white,
                              highlightColor: CustomColor.color1,
                              hoverColor: CustomColor.yellow,
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
                              hoverColor: CustomColor.yellow,
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
                          ],
                        ),
                      ],
                    ), 
                  ),
                ),
// FORM
                SizedBox(height:kPadding*2),
                Card(
                  color:CustomColor.black,
                  elevation: 3,
                  shape:BeveledRectangleBorder(
                    borderRadius: BorderRadius.circular(kBorderRadius),
                  ),
                  child:Container(
                    padding: EdgeInsets.all(22),
                    width: kMaxWidth /2,
                    constraints: BoxConstraints(
                      maxWidth:kMaxWidth /2
                    ),
                    decoration: BoxDecoration(
                      borderRadius: BorderRadius.circular(kBorderRadius),
                      color: CustomColor.black
                    ),
                    child:  Form(
                      key: formKey,
                      child:Column(
                        mainAxisSize: MainAxisSize.min,
                        crossAxisAlignment: CrossAxisAlignment.end,
                        spacing: 20,
                        children: [
// FULL NAME
                          Wrap(
                            runSpacing: 20,
                            spacing: 10,
                            children: [
                              SizedBox(
                                width: Responsive.isMobile(context) ? MediaQuery.of(context).size.width : kMaxWidth /4.40,
                                child: TextFormFieldCustom(
                                  controller: fullNameController,
                                  textInputAction: TextInputAction.next,
                                  keyboardType: TextInputType.name,
                                  labelText:translate('full name', locale: displayLocal),
                                  validator: (text) {
                                     if (text == null || text.trim().isEmpty) {
                                      return translate("please enter a valid value", locale: displayLocal);
                                    }
                                    return null;
                                  },
                                  onChanged: (text) {
                                    if (text.trim().isEmpty) {
                                      fullNameController.clear();
                                    }
                                  },
                                ),
                              ),
//// EMAIL ADDRESS
                              SizedBox(
                                width: Responsive.isMobile(context) ? MediaQuery.of(context).size.width : kMaxWidth /4.40,
                                child: TextFormFieldCustom(
                                  controller: emailAddressController,
                                  textInputAction: TextInputAction.done,
                                  keyboardType: TextInputType.name,
                                  labelText: translate('email address', locale: displayLocal),
                                  validator: (text) {
                                    if (text == null || text.trim().isEmpty) {
                                      return translate("please enter a valid value", locale: displayLocal);
                                    }
                                    if (!EmailValidator.validate(text)) {
                                      return translate("please enter a valid email address", locale: displayLocal);
                                    }
                                    return null;
                                  },
                                  onChanged: (text) {
                                    if (text.trim().isEmpty) {
                                     if (emailAddressController.text.isNotEmpty) {
                                        emailAddressController.clear();
                                      }
                                    }
                                  },
                                ),
                              ),
// DESCRIPTIONS
                              SizedBox(
                                //  width: ResponsiveBuilder.isMobile(context) ? (MediaQuery.of(context).size.width -20) : 558,
                                child:TextField(
                                  maxLines: null,
                                  controller:descriptionController,
                                  style:Theme.of(context).textTheme.titleMedium,
                                  decoration: InputDecoration(
                                    labelText: translate('message'),
                                    labelStyle: Theme.of(context).textTheme.titleSmall!.copyWith(color: CustomColor.white),
                                    filled: true,
                                    fillColor: CustomColor.yellow,
                                    hintStyle: Theme.of(context).textTheme.titleSmall,
                                    border:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color:  CustomColor.white, width: 1)),
                                    enabledBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color: CustomColor.black, width: 1)),
                                    disabledBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color: CustomColor.black, width: 1)),
                                    focusedBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color: CustomColor.black, width: 1)),
                                    errorBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide:  BorderSide(color: CustomColor.errorCode, width: 1)),
                                  ),
                                )
                              ),                              
                            ],
                          ),
//BUTTON
                          CustomButton(
                            onPressed:()async{
                              if (formKey.currentState!.validate()) {
                                if(descriptionController.text.isEmpty){
                                  showTopSnackBar(
                                    context:context,
                                    message:translate('please enter a valid value', locale: displayLocal),
                                    type: MessageType.error,
                                  );
                                  return;
                                }
                                showCircularLoadingDialog(context);
                              }
                            }, 
                            child: Text(
                              translate('send', locale: displayLocal),
                              style:Theme.of(context).textTheme.titleMedium!.copyWith(
                              color: CustomColor.white, 
                              letterSpacing: 1.2,
                            // fontWeight: FontWeight.bold,
                              ),
                            ),
                          ),
                        ]
                      )
                    )
                  ),
                ),
                SizedBox(height:kPadding*3),
                Footer()   
              ],
            ),
          )
        ),
      ),
    );
  }
}