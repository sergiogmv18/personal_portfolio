import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/views/components/drawer.dart';
import 'package:personal_portfolio/views/components/footer.dart';
import 'package:personal_portfolio/views/components/hearder.dart';
import 'package:personal_portfolio/views/components/title.dart';
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
      //backgroundColor:CustomColor.black,
      drawer: drawerComponent(context, displayLocal: displayLocal, index:index),
      body: SingleChildScrollView(
        child: Column(
          mainAxisSize: MainAxisSize.max,
          children: [
            HearderCustom(index:index),
            SizedBox(height:kPadding*2),
             TitlePage(title: 'my works'),
            
            SizedBox(height:kPadding),
// ALL WORKS 
            Container(
              width: MediaQuery.of(context).size.width,
              color: CustomColor.black,
              child:Column(
                children: [
                  AllWorks(), 
                  SizedBox(height:kPadding*2),   
                ],
              )          
            ),     
            Footer()
          ],
        ),
      ),
    );
  }
}