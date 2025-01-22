import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

void showTopSnackBar({ required BuildContext context, required String message, Duration duration = const Duration(seconds: 3), Color backgroundColor = Colors.black, MessageType type = MessageType.info }) {
  final backgroundColor = {
    MessageType.info: Colors.blue,
    MessageType.success: Colors.green,
    MessageType.error: Colors.red,
    MessageType.warning: Colors.orange,
  }[type];
  final overlay = Overlay.of(context);
  final overlayEntry = OverlayEntry(
    builder: (context) => Positioned(
      top:0, // MediaQuery.of(context).padding.top + 10, // Justo debajo del área de notificación
      left: 0,
      right: 0,
      child: Material(
        color: Colors.transparent,
        child: Container(
          padding: const EdgeInsets.symmetric(vertical: 12, horizontal: 16),
          decoration: BoxDecoration(
            color: backgroundColor,
            boxShadow: const [
              BoxShadow(
                color: Colors.black26,
                blurRadius: 10,
                offset: Offset(0, 2),
              ),
            ],
          ),
          child: Text(
            message,
            style: Theme.of(context).textTheme.titleSmall!.copyWith(
              color:CustomColor.white 
            ),
            textAlign: TextAlign.center,
          ),
        ),
      ),
    ),
  );

  // Insertar el Overlay
  overlay.insert(overlayEntry);
  
  // Eliminar el Overlay después de la duración
  Future.delayed(duration, () {
    overlayEntry.remove();
  });
}

// Enumeración para tipos de mensajes
enum MessageType { info, success, error, warning }