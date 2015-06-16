---
title: Problemfelder aufmachen
---

# Problemfeld Vorgehensmodelle in der agilen Software Entwicklung

## Was ist ein Vorgehensmodell?

Da das Thema dieser Arbeit die Entwicklung eines Vorgehensmodell ist, möchte dieser Begriff zuerst einmal definiert werden. Hierbei sollen die beiden Wörter "Vorgehen" und "Modell" zunächst separat voneinander betrachtet werden.

**Vorgehen**

Mit Vorgehen ist hier die Vorgehensweise, also die Art und Weise, wie jemand vorgeht, gemeint.

**Modell**

> Ein Modell repräsentiert die als wichtig erachteten Aspekte eines Systems.

Aus der Formulierung "als wichtig erachtet" lässt sich der Ansatz der *Abstraktion* erkennen. Ein Modell möchte Informationen auf die wesentliche Punkte beschränken, indem es unwichtige Details weglässt.

Ein *Vorgehensmodell* kann also als eine Beschreibung definiert werden, wie für eine bestimme Aufgabe vorgegangen wird. Je nach Aufgabe ist hier ein gewisses Level der Abstraktion vonnöten. Ein Vorgehensmodell beschreibt nicht die Umsetzung einer konkreten Aufgabe, sondern eher eine bestimmte *Klasse von Aufgaben*<!--ZITAT Eckhart Hanser -->.

<!--ZITAT Eckhart Hanser --> schreibt, dass er als Synonym zu dem Begriff Vorgehensmodell den Begriff Prozessmodell verwendet und definiert diesen Begriff wie folgt:

> Ein Software-Prozessmodell ist ein Modell für den Ablauf der Entwicklung eines Software-Systems. Dabei geht es nicht um die Darstellung des Ablaufs eines bestimmten Software-Entwicklungsprojekts, sondern einer ganzen Klasse von Projekten.

Vorgehensmodelle gehören in der Informatik zum Bereich des Projektmanagement. Projektmanagement wird laut <!--ZITAT DIN69901-5--> wie folgt definiert:

> Gesamtheit von Führungsaufgaben, -organisation, -techniken und -mitteln für die Initiierung, Definition, Planung, Steuerung und den Abschluss von Projekten

Das Vorgehensmodell im Projektmanagement beantwortet die folgenden 5 Fragen:

**Wer** macht **Wann**, **Was** mit **Welchen Mitteln**, **Warum?** *(=mit welchem Ziel?)*
<!--TODO Muss noch weiter ausgeführt und recherchiert werden -->

Wenn ein 

Vorgehensmodelle in der Informatik beschreiben in abstrakter Form den Prozess der Software Entwicklung
Nicht nur Aktivitäten, sondern auch Rollen und Artefakte

## Phasen in der Software Entwicklung

Um in der Software Entwicklung von einem Auftrag zu einer fertigen und lauffähigen Software zu kommen, die am Ende beim Kunden in Betrieb genommen werden kann, sind verschiedene Aktivitäten notwendig. Als Laie könnte man meinen, Software Entwicklung sei *Programmieren*, also das schreiben von Code. Das ist nicht ganz falsch, das *Programmieren* ist tatsächlich ein Teil der Software Entwicklung. Allerdings gehören hier noch mehr Tätigkeiten dazu. Die erforderlichen Tätigkeiten der Software Entwicklung können in folgende Phasen unterteilt werden: <!--ZITAT Eckhart Hanser -->

- Planung des Prozesses
- Spezifikation der Anforderungen
- Design
- Implementieren (Programmieren)
- Testen

Bei jedem Software-Entwicklungs-Projekt wird es nötig sein, die Aktivitäten dieser Phasen durchzuführen. Deswegen sei hier grob erklärt, was diese Phasen bedeuten und welche Aktivitäten sie beinhalten.

### Planung des Prozesses

Für jedes organisierte Handeln braucht es einen Plan, der früher oder später von dem Projektleiter oder dem Team ausgearbeitet werden soll. Je nach Vorgehensmodell werden hier die nächsten Schritte geplant und festgelegt, *welche Aktivitäten* von *wem* *wann* erledigt werden sollen. In dieser Phase wird also geplant, wie die anderen Phasen durchgeführt werden sollen.

### Spezifikation der Anforderungen

Bei Software-Entwicklungs-Projekten handelt es sich meist um Projekte, die für eine bestimmte Domäne entwickelt werden. Software ist nicht zum Selbstzweck da, sondern dient immer dazu, dem Benutzer in seinem Nutzungskontext bei der Durchführung seiner Aufgabe zu unterstützen. Dabei gilt es bei der Entwicklung der Software, den Nutzungskontext des zu entwickelnden Systems zu verstehen und auf der Grundlage dieses Verständnisses Anforderungen an das System zu formulieren.

In dieser Phase liegt der Schwerpunkt auf der Frage, **was** entwickelt werden soll.

### Design

Auf Basis der formulierten Anforderungen wird ein System entworfen. Hier werden die Entscheidungen getroffen, wie und mit welchen Hilfsmitteln das System aufgebaut wird. 

In dieser Phase liegt der Schwerpunkt auf der Frage, **wie** entwickelt werden soll.

### Implementieren

Mithilfe der Entscheidungen aus der Design Phase kann nun (endlich) programmiert werden. Die in der Design Phase festgelegten Funktionen werden den Anforderungen entsprechend kodiert.

### Testen

Nach dem Kodieren wird die Software getestet, um zu validieren, dass sowohl das *richtige Produkt* entwickelt wurde, als auch das Produkt *richtig* entwickelt wurde. 

## Historie der Vorgehensmodelle

Warum machen wir das?
Da die Disziplin der Software Entwicklung und somit auch das Projektmanagement von Software Projekten noch relativ jung ist.

### Wasserfallmodell

Anforderungen unklar.  
Probleme werden "verschleppt"  

### Spiralmodell

### Iterativ
schwierig zu planen

### Inkrementell

angepasstes Vertragsmodell  
stark zusammenhängend mit iterativ  


## Schwergewichtige Vorgehensmodelle

Unterscheidung Schwergewichtig und leichtgewichtig


## Was bedeutet “Agil”?



### Agiles Manifest

Individuen und Interaktionen mehr als Prozesse und Werkzeuge  
Funktionierende Software mehr als umfassende Dokumentation  
Zusammenarbeit mit dem Kunden mehr als Vertragsverhandlung  
Reagieren auf Veränderung mehr als das Befolgen eines Plans  

## Agile Vorgehensmodelle

Unterscheidung: Meta - Modelle und Methoden

### XP

Während andere Vorgehensmodelle Meta Modelle sind, also keine konkreten Methoden vorschreiben, sagt XP klar, welche Methoden für was benutzt werden sollen.

#### Die 5 Werte

- Kommunikation
	- Interne Kommuniation
	- Kommunikation mit dem Kunden ("Kunde vor Ort")
- Einfachheit
	- KISS / YAGNI
- Feedback
	- Systemtests ersetzen Spezifikationen (System gibt auskunft über Funktionalität und Erfolg)
	- Feedback vom Kunden: Vorstellungen lassen sich nicht von Anfang an klar spezifizieren. 
	- Qualifiziertes Feedback des Kunden (späterer Anwender) in der Sprache des Kunden
	- Die Möglichkeit, frühes Kunden Feedback einzuholen, ist wichtiger als fehlerfreie Funktionen (?)
- Mut
	- Refactoring (Code neu schreiben)
	- Transparenz gegenüber dem Kunden
	- Änderung des Vorgehensmodells
- Respekt

#### Die 14 Prinzipien

#### Die Praktiken

##### Planung

- User Stories
	- Nur kurzes Anreißen des Arbeitpakets. 
	- Details werden direkt während der Implementierung mit dem Kunden geklärt.
- Release Planung
	- 3 Parteien: Entwickler (will zeitliche Puffer), Geschäftsleitung (will möglichst schnell sein), Kunde (steht zwischen den Fronten)
	- 4 Variablen: Umfang, Ressourcen, Zeit, Qualität (sollte immer maximal sein)
	- ???
- Kleine Releases
- Messung der Projektgeschwindigkeit
- Iterationsplanung
	- Programmierer nehmen ganze User Story
	- Von Anfang an Testfälle entwickeln zum Messen des Zielerreichungsgrad
- Move People around
	- dürftige Dokumentation: viel Wissen in den Köpfen der Entwickler
	- Reduzierung des *Truck-Faktor*s duch beteiligung der Teammitglieder in allen Bereichen
	- Manchmal schwierig, Teammitglieder von diesem generalistischen Ansatz zu überzeugen
- Stand-Up Meeting
	- "Sitzung" im stehen abhalten
	- klare, präzise und schnelle Kommunkation
- Fix XP When it Breaks

##### Design

- Einfachheit des Designs
	- Architektur nur für die in der anstehenden Iteration benötigten Kriterien entwerfen
	- daraus folgt: Gesamtarchitektur erst mit der letzten Iteration fertig
	- Funktionalität nicht früher als nötig einbauen
	- kann sein, dass andere Funktionalität später überflüssig sein wird
- Systemmetapher
	- Eine Metapher für das System, welches alle Projektbeteiligten kennen und verstehen
	- Beispiel: Automobilproduktionslinie im C3 Projekt
- CRC Karten

### Kanban

### Scrum

## Welches Vorgehensmodell ist "das Beste"?

Kann man so nicht sagen. Vorgehensmodelle müssen dem Projekt entsprechend ausgewählt werden. Manchmal kann auch ein Wasserfallmodell sinnvoll sein

#Problemfeld Filmproduktion

## Klassisches Vorgehen in der Filmindustrie

## Artefakte

## Kategorien der Filmproduktion

### Welche Kategorien der Filmproduktion gibt es?

### Welche sind für einen agilen Ansatz interessant?

### Besonderer Kontext: Kurzer Imagefilm

## Use Cases: Erfahrungen mit Open Exchange

## EXKURS: Unterschied Imagefilm / Werbefilm
