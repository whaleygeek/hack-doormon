import RPi.GPIO as GPIO
import time
import datetime

GPIO.setmode(GPIO.BCM)

LED = 17
DOOR = 18
POLL_TIME = 0.25
DOOR_OPEN = True


GPIO.setup(LED, GPIO.OUT)
GPIO.setup(DOOR, GPIO.IN)

def reportState(t, s):
  if s:
    dstr = "OPEN"
    GPIO.output(LED, True)
  else:
    dstr = "CLOSED"
    GPIO.output(LED, False)

  print(t + ",BOOT:" + dstr)
 
def reportChange(t, d):
  if d:
    dstr = "OPENED"
    GPIO.output(LED, True)
  else:
    dstr = "CLOSED"
    GPIO.output(LED, False)

  print(t + ",CHANGE:" + dstr) 


def timestamp():
  return datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")


print("starting...")
door_state = GPIO.input(DOOR)
reportState(timestamp(), door_state)

while True:
  time.sleep(POLL_TIME)
  door = GPIO.input(DOOR)
  if door != door_state:
    reportChange(timestamp(), door)
    door_state = door




