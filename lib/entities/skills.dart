
import 'package:flutter/material.dart';

class Skills {
  String? name;
  List? titles;
  IconData? icon;
  Skills ({this.titles, this.name, this.icon});

  // GETs
  String? getName(){
    return name;
  }
  List? getTitles(){
    return titles;
  }

  IconData? getIcon(){
    return icon;
  }

  // SETs
  void setName(String? name){
    this.name = name;
  }

  void setIcon(IconData? icon){
    this.icon = icon;
  }

  void setTitles(List? titles){
    this.titles = titles;
  }


   // OTHER METHODS
  Map<String, dynamic> toMap() {
    return {
      'name':name,
      'titles':titles.toString(),
      'icon':icon
    };
  }
}


