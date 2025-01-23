import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

/*
 * themes defined for PersonalPortfolio, thus defining each color, letter in the entire system
 * @author  SGV - 2025-01-22
 * @version 1.0 - 2025-01-22 - initial release
 * return ThemeData
 */
class PersonalPortfolioThemes {
  
  ThemeData theme = ThemeData(
    useMaterial3: true,
    fontFamily: 'Roboto',
    primaryColor: CustomColor.black,
    primaryColorDark:CustomColor.black,
    colorScheme: ColorScheme.fromSwatch(
      errorColor:CustomColor.errorCode,  
      backgroundColor: CustomColor.white
    ).copyWith(
      primary: CustomColor.black,
      secondary: CustomColor.black,
    ),
    dividerColor: CustomColor.black,
    disabledColor:  CustomColor.black,
    cardColor: CustomColor.cardsColors,
    iconTheme: const IconThemeData(color: Colors.black),  
  );
}

