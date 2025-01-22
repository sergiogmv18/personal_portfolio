import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

class ErrorScreen extends StatefulWidget {
  const ErrorScreen({super.key});

  @override
  State<ErrorScreen> createState() => _ErrorScreenState();
}

class _ErrorScreenState extends State<ErrorScreen> with SingleTickerProviderStateMixin {
    // animationcontroller will control tha animation.
  late AnimationController _animationController;
  @override
  void initState() {
    // Initialize the animationcontroller wit a duration 2 secnds for both forward and reverse animation
    _animationController = AnimationController(
      vsync: this,
      duration: const Duration(seconds: 2),
      reverseDuration: const Duration(seconds: 2),
    )
      // add a listener to check the status of the animation.
      // if the animation is completed, it reverse back.
      // if it si dismissed (reached the beginning), it forwards again.

      ..addStatusListener((status) {
        if (status == AnimationStatus.completed) {
          _animationController.reverse();
        } else if (status == AnimationStatus.dismissed) {
          _animationController.forward();
        }
      });
    // start the naimation in the forward direction.
    _animationController.forward();
    super.initState();
  }

  void despose() {
    _animationController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    double height = MediaQuery.of(context).size.height;
    return Scaffold(
      backgroundColor:CustomColor.color2,
      body: Stack(
        children: [
          // the first positioned widget displays an animated image that totates back and forth.
          Positioned(
            bottom: height / 4.4,
            right: height / 20,
            child: AnimatedBuilder(
              animation: _animationController,
              child: Image.asset( 
                ImageAssets.light,
                height: height * 1.3,
              ),
              builder: (context, widget) {
                // the transform widget is used to rotate the image around it's bottom-center point.
                return Transform.rotate(
                  angle:- _animationController
                      .value, // rotate the aimage according to tha animation value
                  alignment: Alignment.bottomCenter,
                  child: widget,
                );
              },
            ),
          ),

          Positioned(
            bottom: 0,
            right: height / 2.7,
            child: Image.asset(
              ImageAssets.source,
              width: height / 4.6,
            ),
          ),
          Center(
            child: Column(
              children: [
                Text(
                  "404",
                  style: TextStyle(
                    fontSize: height / 5,
                    fontWeight: FontWeight.bold,
                    color: CustomColor.color2,
                  ),
                ),
                Text(
                  "Page Not Found",
                  textAlign: TextAlign.center,
                  style: TextStyle(
                    fontSize: height * 0.05,
                    fontWeight: FontWeight.bold,
                    color: CustomColor.color2,
                  ),
                )
              ],
            ),
          )
        ],
      ),
    );
  }
}