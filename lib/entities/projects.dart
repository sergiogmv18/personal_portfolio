class Projects {
  String? name;
  String? descriptions;
  String? url;
  String? photoPath;
  Projects ({this.name, this.url, this.photoPath, this.descriptions});

  // GETs
  String? getName(){
    return name;
  }
  String? getDescriptions(){
    return descriptions;
  }

  String? getUrl(){
    return url;
  }

  String? getPhotoPath(){
    return photoPath;
  }

  // SETs
  void setName(String? name){
    this.name = name;
  }

  void setUrl(String? url){
    this.url = url;
  }

  void setPhotoPath(String? photoPath){
    this.photoPath = photoPath;
  }

  void setDescriptions(String descriptions){
    this.descriptions = descriptions;
  }


   // OTHER METHODS
  Map<String, dynamic> toMap() {
    return {
      'name':name,
      'description':descriptions,
      'url':url,
      'photoPath':photoPath
    };
  }
}


