#include <Wire.h>
#include <LiquidCrystal.h> 
LiquidCrystal lcd(12, 11, 5, 4, 3, 2); 
   double alpha=0.75;
   int period=20;
   double refresh=0.0;
   
void setup(void)
{
  Serial.begin(9600);
   pinMode(A0,INPUT);
   lcd.begin(16,2);
   lcd.clear();
   lcd.setCursor(0,0);
}

void loop(void)
{
   static double oldValue=0;
   static double oldrefresh=0;
 
   int beat=analogRead(A0);
  
   double value=alpha*oldValue+(0-alpha)*beat;
   refresh=value-oldValue;
  Serial.print(beat);
  Serial.print(",");
 Serial.println(value);
   lcd.setCursor(0,0);
   lcd.print(" HeartRateMonitor "); 
   lcd.setCursor(0,1);
   lcd.print("        ");
   lcd.setCursor(0,1); 
   lcd.print(beat/10);
   oldValue=value;
   oldrefresh=refresh;
   delay(period*10);
}
