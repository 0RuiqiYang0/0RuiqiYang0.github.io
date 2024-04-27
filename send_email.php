{\rtf1\ansi\ansicpg1252\cocoartf2761
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
if ($_SERVER["REQUEST_METHOD"] == "POST") \{\
    $name = $_POST["name"];\
    $email = $_POST["email"];\
    $message = $_POST["message"];\
    \
    // \uc0\u37038 \u20214 \u25509 \u25910 \u32773 \u30340 \u37038 \u31665 \u22320 \u22336 \
    $to = \'931652682836@qq.com";\
\
    // \uc0\u37038 \u20214 \u20027 \u39064 \
    $subject = "New message from my Homepage\'94;\
\
    // \uc0\u37038 \u20214 \u20869 \u23481 \
    $body = "Name: $name\\n";\
    $body .= "Email: $email\\n";\
    $body .= "Message:\\n$message";\
\
    // \uc0\u21457 \u36865 \u37038 \u20214 \
    mail($to, $subject, $body);\
\
    // \uc0\u36339 \u36716 \u21040 \u25104 \u21151 \u39029 \u38754 \u25110 \u32773 \u26174 \u31034 \u25104 \u21151 \u28040 \u24687 \
    header("Location: success.html");\
    exit();\
\}\
?>\
}