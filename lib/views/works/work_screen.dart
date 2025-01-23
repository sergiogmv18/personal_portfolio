import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/views/components/drawer.dart';
import 'package:personal_portfolio/views/components/hearder.dart';
import 'package:personal_portfolio/views/works/componets/all_works.dart';
import 'package:provider/provider.dart';

class WorkScreen extends StatefulWidget {
  const WorkScreen({super.key});

  @override
  State<WorkScreen> createState() => _WorkScreenState();
}

class _WorkScreenState extends State<WorkScreen> {
  final int index = 2;

  @override
  Widget build(BuildContext context) {
 final displayLocal = Provider.of<LocaleFixed>(context).locale;
    return Scaffold(
      backgroundColor:CustomColor.white,
      drawer: drawerComponent(context, displayLocal: displayLocal, index:index),
      body: SingleChildScrollView(
        child: Column(
          mainAxisSize: MainAxisSize.min,
          children: [
            HearderCustom(index:index),
// ALL WORKS 
            AllWorks(),      
// SKILLS
            SizedBox(height:kPadding*2),
           // SkillsScreen(),
            
          ],
        ),
      ),
    );
  }
}