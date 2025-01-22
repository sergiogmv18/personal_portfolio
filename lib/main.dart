import 'package:flutter/material.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/personal_portfolio.dart';
import 'package:provider/provider.dart';

void main() {
  runApp(
    MultiProvider(
      providers: [
        ChangeNotifierProvider.value(value: TranslationController.getInstance()),
        ChangeNotifierProvider<LocaleFixed>(create: (_) => LocaleFixed()),
      ],
      child:const PersonalPortfolio(),
    )
  );
}
