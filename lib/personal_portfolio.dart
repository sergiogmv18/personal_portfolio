import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/routes.dart';
import 'package:personal_portfolio/config/style/app_theme.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:flutter_localizations/flutter_localizations.dart';

class PersonalPortfolio extends StatelessWidget {
  const PersonalPortfolio({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return  MaterialApp.router(
      routerConfig: RoutesApp().routeConfig,
      title: 'Personal portfolio', 
      debugShowCheckedModeBanner: false,
      localizationsDelegates: const [
        TranslationDelegate(),
        GlobalMaterialLocalizations.delegate,
        GlobalWidgetsLocalizations.delegate,
        GlobalCupertinoLocalizations.delegate,
      ],
      theme: PersonalPortfolioThemes().theme,
    );
  }
}