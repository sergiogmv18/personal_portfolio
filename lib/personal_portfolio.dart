import 'package:flutter/material.dart';

class PersonalPortfolio extends StatelessWidget {
  const PersonalPortfolio({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Personal portfolio',
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.deepPurple),
        useMaterial3: true,
      ),
      home: Container() //const MyHomePage(title: 'Flutter Demo Home Page'),
    );
  }
}