---
title: ""
author: [Niklas von Hirschfeld]
date: ""
keywords: []
---


# Create db

## Commands:

```mysql
CREATE DATABASE IF NOT EXISTS `gulugulu_umfrage_po`;

CREATE TABLE umfrage (id INT UNSIGNED NOT NULL AUTO_INCREMENT, date DATE NOT NULL, q1 INT NOT NULL, q2 INT NOT NULL, q3 INT    NOT NULL, q4 INT NOT NULL, q5 INT NOT NULL, q6 INT NOT NULL,   q7 INT NOT NULL, q8 INT NOT NULL, q9 INT NOT NULL, q10 INT NOT NULL, mail VARCHAR(30), PRIMARY KEY ( id ));

CREATE TABLE counter (id INT UNSIGNED NOT NULL, q1 INT NOT NULL, q2 INT NOT NULL, q3 INT    NOT NULL, q4 INT NOT NULL, q5 INT NOT NULL, q6 INT NOT NULL,   q7 INT NOT NULL, q8 INT NOT NULL, q9 INT NOT NULL, q10 INT NOT NULL, PRIMARY KEY ( id ));
  
CREATE TABLE `ip` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,`ip` TEXT NOT NULL ,`datum` TEXT NOT NULL ,PRIMARY KEY ( `id` ));

INSERT INTO counter (id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) VALUES (1,0,0,0,0,0,0,0,0,0,0);
INSERT INTO counter (id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) VALUES (2,0,0,0,0,0,0,0,0,0,0);
INSERT INTO counter (id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) VALUES (3,0,0,0,0,0,0,0,0,0,0);

```

## Sql allgemein

```mysql
DROP TABLE table_name;

TRUNCATE TABLE umfrage;
```

## Counter

für jeden frage eine Column mit dem Namen q1, q2, q3, q4, q5, q6, q7, q8, q9, q10
Für jede Antwortmöglichkeit git es eine nummeriert row mit 1, 2 und 3. 1 ist die erste Antwortmöglichkeit, 2 die zweite und 3 die dritte.

# chart bubble chart.js

- stacked bar chart

# Gifs

- <div style="width:30%;height:0;margin-right:auto;margin-left:auto;padding-bottom:108%;position:relative;"><iframe src="https://giphy.com/embed/YRuFixSNWFVcXaxpmX" width="30%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/moodman-YRuFixSNWFVcXaxpmX">via GIPHY</a></p>
- <div style="width:30%;height:0;margin-right:auto;margin-left:auto;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/Zcm5DaspYzhTxstkF4" width="30%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/agt-nbc-tyra-banks-ameircas-got-talent-Zcm5DaspYzhTxstkF4">via GIPHY</a></p>
- <div style="width:30%;height:0;margin-right:auto;margin-left:auto;padding-bottom:100%;position:relative;"><iframe src="https://giphy.com/embed/JLFq4Jh5bSJEDHZjSB" width="30%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/studiosoriginals-good-job-cheerleader-you-did-it-JLFq4Jh5bSJEDHZjSB">via GIPHY</a></p>
- <div style="width:30%;height:0;margin-right:auto;margin-left:auto;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/xT77XWum9yH7zNkFW0" width="30%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/9jumpin-wow-nice-well-done-xT77XWum9yH7zNkFW0">via GIPHY</a></p>

