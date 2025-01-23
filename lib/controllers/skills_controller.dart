import 'package:personal_portfolio/entities/skills.dart';
import 'package:personal_portfolio/models/skill.dart';

class SkillsController {


  /*
   * Get all skills exist
   * @author SGV
   * @version 1.0 - 20250123 - initial release
   * @return List<Skills>
   */
  Future<List<Skills>>getSkills()async{
    List<Skills> allSkills = await Skill().getAllSkills();
    return allSkills;
  }
}