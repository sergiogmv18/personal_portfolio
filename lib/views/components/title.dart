import 'package:auto_size_text/auto_size_text.dart';
import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:provider/provider.dart';

class TitlePage extends StatelessWidget {
  final String title;
  const TitlePage({super.key, required this.title});

  @override
  Widget build(BuildContext context) {
    return Center(
      child: Stack(
        alignment: Alignment.center,
        children: [
          // Texto de fondo (negro y grande)
          AutoSizeText(
            translate(title, locale:  Provider.of<LocaleFixed>(context).locale).allInCaps,
            maxLines: 1,
            maxFontSize:80,
            style: TextStyle(
              fontSize: 80,
              color: CustomColor.black.withOpacity(0.2), // Semitransparente
              fontWeight: FontWeight.bold,
            ),
          ),
          // Texto principal (blanco y encima)
          AutoSizeText(
            translate(title, locale:  Provider.of<LocaleFixed>(context).locale).allInCaps,
            maxLines: 1,
            maxFontSize: 40,
            style: TextStyle(
              fontSize: 40,
              color: Colors.black,
              fontWeight: FontWeight.bold,
            ),
          ),      
          // Text(
          //   translate(title, locale:  Provider.of<LocaleFixed>(context).locale).allInCaps,
          //   style: TextStyle(
          //     fontSize: 40,
          //     color: Colors.black,
          //     fontWeight: FontWeight.bold,
          //   ),
          // ),
        ],
      ),
    );
  }
}