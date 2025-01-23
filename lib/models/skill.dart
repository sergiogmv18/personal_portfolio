import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:personal_portfolio/entities/skills.dart';

class Skill extends Skills {

   /*
   * Get all Skills
   * @author SGV
   * @version 1.0 - 20250123 - initial release
   * @return List<Skills>
   */
  Future<List<Skills>> getAllSkills()async{
    List<Skills> allSkills = [];
    List jsonSkills = json.decode(await rootBundle.loadString('assets/skills.json'));
    for (Map skill in jsonSkills) {
      Skills skillsWk = Skills();
      String name = skill.keys.first;
      IconData icon = getAllIconOfSkills(name:name);
      skillsWk.setName(name);
      skillsWk.setIcon(icon);
      skillsWk.setTitles(skill[name]);
      allSkills.add(skillsWk);
    }
    return allSkills;
  }


  /*
  * Get icon of all Skills exist
  * @author SGV
  * @version 1.0 - 20250123 - initial release
  * @return IconData
  */
  static getAllIconOfSkills({required String name}){
    switch(name){
      case"frontend": 
        return FontAwesomeIcons.code;
      case"backend":
        return FontAwesomeIcons.server;
      case"mobile":
        return FontAwesomeIcons.mobile;
      case"other":
        return FontAwesomeIcons.book;
    }
  }
}