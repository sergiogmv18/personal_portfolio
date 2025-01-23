import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/responsive.dart';

class ProjectsImagen extends StatelessWidget {
  final String photoPath;
  const ProjectsImagen({super.key, required this.photoPath});

  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(    
        image:DecorationImage(
          image: AssetImage(photoPath),
          fit: BoxFit.fitWidth,
        )
      ),
      width: Responsive.isDesktop(context) ? 600 :Responsive.isMobile(context) ? MediaQuery.of(context).size.width : 400,
      height:300,
      padding: EdgeInsets.all(3),
    );
  }
}