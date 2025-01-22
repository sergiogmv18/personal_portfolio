import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/views/components/menu.dart';



/*
 * Drawer component
 * @author  SGV - 20230216
 * @version 1.0 - 20230216 - initial release
 * @return  <widget> 
 */

Widget drawerComponent(BuildContext context) {
  return  Drawer(
    backgroundColor: CustomColor.color2,
    child: ListView(
      children: [
       
        const MobMenu()
      ],
    ),
  );
}