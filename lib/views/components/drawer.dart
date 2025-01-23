import 'package:auto_size_text/auto_size_text.dart';
import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/views/components/menu.dart';
import 'package:personal_portfolio/views/components/profile_photo.dart';



/*
 * Drawer component
 * @author  SGV - 20250123
 * @version 1.0 - 20250123 - initial release
 * @return  <widget> 
 */

Widget drawerComponent(BuildContext context, {required Locale displayLocal, int? index}) {
  return  Drawer(
    //backgroundColor: CustomColor.color1,
    backgroundColor: CustomColor.color3,
    child: ListView(
      padding: EdgeInsets.only(top: kPadding),
      children: [
        Container(
          padding: EdgeInsets.only(top: kPadding, bottom: kPadding),
          child:Column(
            mainAxisSize: MainAxisSize.min,
            children: [
              ProfilePhoto(),
              AutoSizeText(
                fullName,
                maxLines: 1,
                textAlign:TextAlign.center,
                style:Theme.of(context).textTheme.titleMedium!.copyWith(
                  color: CustomColor.white, 
                  fontWeight: FontWeight.bold,
                ),
              ),
            ]
          ),
        ),

        MobMenu(displayLocal:displayLocal, index:index)
      ],
    ),
  );
}