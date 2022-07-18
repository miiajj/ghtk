#!/usr/bin/env bash

EMAIL_SENDER="noreply.danhde@gmail.com"
GOOGLE_APP_PASSWORD="jenzyrupmyuptjuw"
EMAIL_RECEIVER="huynn.ved@gmail.com"
SUBJECT="Danh De"
RAND_NUM=$(($RANDOM%100))
BODY="Danh de di sap 6:30 roi.\n  Con so hom nay la: __ $RAND_NUM __"
        curl -s --url 'smtps://smtp.gmail.com:465' --ssl-reqd \
        --mail-from $EMAIL_SENDER \
        --mail-rcpt $EMAIL_RECEIVER \
        --user $EMAIL_SENDER:$GOOGLE_APP_PASSWORD \
        -T <(echo -e "From: FB89 Nhac Danh De
To: $EMAIL_RECEIVER
Subject: $SUBJECT

  $BODY")

echo "Success!"

# file /tmp/crontab.[random_string]/crontab
# 9:00AM UTC = 4:00PM GMT+7
#0 9 * * * /home/huynn69/danhde.sh
