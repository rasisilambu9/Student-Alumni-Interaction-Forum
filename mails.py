import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import sys
me=str(sys.argv[1])


my_password = r"teamaitavc"
you = "rasisilambu8@gmail.com"

msg = MIMEMultipart('alternative')
msg['Subject'] = "A.V.C College Of Engineering, Department Of Information Technlogy"
msg['From'] = "STUDENT ALUMNI INTERACTION FORUM"
msg['To'] = "rasisilambu8@gmail.com"

html = '<html><body><p><b>Hi!, Its Happy to said that Your request in STUDENT ALUMNI INTERACTION FORUM get responsed, <font color=red>Kindly Log in by <a href="http://localhost/student-alumni-interaction-forum/stud_log.php">Click here</a></font></b></p></body></html>'
part2 = MIMEText(html, 'html')

msg.attach(part2)

# Send the message via gmail's regular server, over SSL - passwords are being sent, afterall
s = smtplib.SMTP_SSL('smtp.gmail.com')
# uncomment if interested in the actual smtp conversation
# s.set_debuglevel(1)
# do the smtp auth; sends ehlo if it hasn't been sent already
s.login(me, my_password)

s.sendmail(me, you, msg.as_string())
s.quit()