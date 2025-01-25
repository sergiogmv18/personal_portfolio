import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

/*
 * circular progress indicator
 * @author  SGV - 20250123
 * @version 1.0 - 20250123 - initial release
 * @return  <widget> 
 */
Widget circularProgressIndicator(BuildContext context) {
  return const Center(
    child: CircularProgressIndicator(
      color: CustomColor.color3
    ),
  );
}

/*
 * Show icon circular for expect loading next step 
 * @author  SGV - 20250123
 * @version 1.0 - 20250123 - initial release
 * @return  <component> showDialog and redirect to previous page
 */
Future<void> showCircularLoadingDialog(BuildContext context)async {  
  await showDialog(
    context:  context,
    barrierDismissible: false,
    builder: (BuildContext context) {
      return PopScope(
        canPop: false,
        child: circularProgressIndicator(context)
      );
    }
  );
}