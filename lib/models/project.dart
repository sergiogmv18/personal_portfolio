import 'dart:convert';

import 'package:flutter/services.dart';
import 'package:personal_portfolio/entities/projects.dart';

class Project extends Projects{
  
  /*
   * Get all Projects
   * @author SGV
   * @version 1.0 - 20250123 - initial release
   * @return List<Projects>
   */
  Future<List<Projects>> getAllProjects()async{
    List<Projects> allProjects = [];
    List jsonProjects = json.decode(await rootBundle.loadString('assets/projects.json'));
    for (Map project in jsonProjects) {
      Projects projectWk = Projects();
      projectWk.setName(project['name']);
      projectWk.setDescriptions(project['descriptions']);
      projectWk.setUrl(project['url']);
      projectWk.setPhotoPath(project['photoPath']);
      projectWk.setLogo(project['logo']);
      allProjects.add(projectWk);

    }
    return allProjects;
  }

}