import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/controllers/skills_controller.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:personal_portfolio/entities/skills.dart';
import 'package:personal_portfolio/views/components/circular_loading.dart';
import 'package:personal_portfolio/views/skills/cards_skills.dart';
import 'package:provider/provider.dart';

class SkillsScreen extends StatelessWidget {
  const SkillsScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Container(
      constraints: BoxConstraints(
        maxWidth:kMaxWidth
      ),
      child: Column(
        children: [
          FutureBuilder(
            future: SkillsController().getSkills(),
            builder: (context, app) {
              if (app.connectionState == ConnectionState.done) {
                List<Skills>? allSkills = app.data;
                if (allSkills != null && allSkills.isNotEmpty) {
                  if(Responsive.isDesktop(context)){
                   return Wrap(
                      spacing: 20,
                      runSpacing: 20,
                      alignment:WrapAlignment.center,
                      children: List.generate(allSkills.length, (index) {
                        return CardsSkills(skillWk:allSkills[index]);
                      }),
                    );
                  }
                  
                  return SingleChildScrollView( 
                    scrollDirection: Responsive.isDesktop(context) ? Axis.vertical : Axis.horizontal,
                    child: Row(
                      spacing: 20,
                      children: List.generate(allSkills.length, (index) {
                        return CardsSkills(skillWk:allSkills[index]);
                      }),
                    )
                  );
                }
                return Text(
                  translate('check your internet and try again', locale: Provider.of<LocaleFixed>(context).locale),
                  style: Theme.of(context).textTheme.titleMedium,
                  textAlign: TextAlign.center,
                );
              }
              return circularProgressIndicator(context);
            },
          ),
        ],
      ),
    );
  }
}