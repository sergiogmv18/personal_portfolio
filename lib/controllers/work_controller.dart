import 'package:personal_portfolio/entities/projects.dart';
import 'package:personal_portfolio/models/project.dart';

class WorkController {

  /*
   * Get all Projects
   * @author SGV
   * @version 1.0 - 20250123 - initial release
   * @return List<Projects>
   */
  Future<List<Projects>>getAllWorks()async{
    List<Projects> allWorksWk = await Project().getAllProjects();
    return allWorksWk;
  }
}