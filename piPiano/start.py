import pygame
import RPi.GPIO as GPIO
import time
#initialise a previous input variable to 0 (assume button not pressed last)
pygame.mixer.pre_init(channels=6, buffer=1024)
pygame.mixer.init()
piano = pygame.mixer.Sound("piano-notes/d.wav")
prev_input = 0
while True:
  #take a reading
  GPIO.setmode(GPIO.BCM)
  GPIO.setup(17, GPIO.IN)
  input = GPIO.input(17)
  #if the last reading was low and this one high, print
  if ((not prev_input) and input):
    print("Button pressed")
    piano.play()
  #update previous input
  prev_input = input
  #slight pause to debounce
  time.sleep(0.03)
