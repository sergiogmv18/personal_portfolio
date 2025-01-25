import 'package:auto_size_text/auto_size_text.dart';
import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:provider/provider.dart';

class Footer extends StatelessWidget {
  const Footer({super.key});

  @override
  Widget build(BuildContext context) {
    return  Container(
      width: MediaQuery.of(context).size.width,
      height: 40,
      color: CustomColor.black,
      child: Container(
        constraints: BoxConstraints(maxWidth: kMaxWidth),
        alignment: Alignment.center,
        child: AutoSizeText(
          translate('© 2025.All rights reserved.', locale:  Provider.of<LocaleFixed>(context).locale),
          maxLines: 1,
          textAlign:TextAlign.center,
          style:Theme.of(context).textTheme.bodyMedium!.copyWith(
            color: CustomColor.yellow,  
          ),
        ),
      ),
    );
  }
}