import 'package:flutter/material.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/entities/skills.dart';
import 'package:provider/provider.dart';

class CardsSkills extends StatelessWidget {
  final Skills skillWk;
  const CardsSkills({super.key, required this.skillWk});

  @override
  Widget build(BuildContext context) {
    return Stack(
      children: <Widget>[
        Card(
          margin:Responsive.isMobile(context) ?const EdgeInsets.only(top: 40.0): const EdgeInsets.only(top: 70.0),
          color:CustomColor.black,
          elevation: 3,
          shape:BeveledRectangleBorder(
            borderRadius: BorderRadius.circular(kBorderRadius),
          ),
          child: Container(
            height: Responsive.isMobile(context) ? 260 : 300,
            width:Responsive.isMobile(context) ? MediaQuery.of(context).size.width - 40 :  MediaQuery.of(context).size.width / 4,
            padding: const EdgeInsets.only(top: 45.0, left: 20, right: 20),
            decoration: BoxDecoration(
              borderRadius: BorderRadius.circular(kBorderRadius),
              color: CustomColor.black
            ),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.center,
              spacing: 10,
              children: <Widget>[
                
                Text(
                  translate(skillWk.getName()!,  locale: Provider.of<LocaleFixed>(context).locale),
                  style: Theme.of(context).textTheme.titleLarge!.copyWith(fontWeight: FontWeight.bold, color: CustomColor.white),
                  textAlign: TextAlign.center,
                ),

                SizedBox(
                 // width: MediaQuery.of(context).size.width,
                  child: Column(
                    //crossAxisAlignment: CrossAxisAlignment.center,
                    mainAxisAlignment: MainAxisAlignment.start,
                    crossAxisAlignment: CrossAxisAlignment.start,
                    mainAxisSize: MainAxisSize.min,
                    children: List.generate(skillWk.getTitles()!.length, (index) {
                      return Text.rich(
                        textAlign: TextAlign.start,
                        TextSpan(
                          children:[
                            TextSpan(
                              text: '✔️',
                              style: Theme.of(context).textTheme.titleMedium!.copyWith(color: CustomColor.white),
                            ),
                            TextSpan(
                              text: ' ${skillWk.getTitles()![index]}',
                              style: Theme.of(context).textTheme.titleMedium!.copyWith(color: CustomColor.white)
                            ),
                          ]
                        )
                      );
                    }),
                  )
                ),
              ],
            )
          ),
        ),
        Positioned(
          top: .0,
          left: .0,
          right: .0,
          child: Center(
            child:Container(
              width:Responsive.isMobile(context) ? 70 : 100,
              height:Responsive.isMobile(context) ? 70 : 100,
              decoration: BoxDecoration(
                shape: BoxShape.circle,
                color: CustomColor.black
              ),
              alignment: Alignment.center,
              child:  FaIcon(
                skillWk.getIcon(), 
                color: CustomColor.yellow, 
                size: Responsive.isMobile(context) ? 30 : 40,
              ),
            )
          ),
        )
      ],
    );
  }
}