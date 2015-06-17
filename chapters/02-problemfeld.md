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

Unterscheidung: Meta - Modelle und Methoden

## XP

Als erstes Vorgehensmodell soll das "eXtreme Programming" - oder kurz: XP - betrachtet werden. XP wurde von Kent Beck 19?? <!--TODO Wann genau??--> zum ersten mal eingesetzt und gilt als eines der ersten Vorgehensmodelle, die die Ansätze und Prinzipien von Agiler Softwareentwicklung in einem ganzheitlichem Rahmen umsetzen. <!--TODO Ist das so? Belege?--> 

Der größte Unterschied zu den anderen Vorgehensmodellen, die nachfolgend betrachtet werden, ist, dass XP klar vorschreibt, welche Methoden und Techniken für die Umsetzung des Vorgehensmodells zu benutzen sind. Scrum und Kanban sind eher Meta Modelle, das heißt, sie beschreiben das Vorgehen auf der Meta Ebene. Sie lassen ein ein individuelles Auswählen der konkreten Techniken zur Umsetzung nicht nur zu, sondern machen dies sogar erforderlich. Viele Aspekte der Umsetzung werden in diesen Modellen bewusst offen gehalten. XP ist da anders. Es schreibt ganz konkrete Praktiken und Regeln vor, die benutzt werden sollen. Kent Beck <!--ZITAT Kent Beck--> verlangt sogar, dass XP nur in der Gesamtheit aller Methoden übernommen werden kann. 


### Die 5 Werte

Die Praktiken und Regeln in XP unterliegen den 5 Werten von XP: *Kommunikation*, *Einfachheit*, *Feedback*, *Mut* und *Respekt*.

#### Kommunikation

Ein zentrales Anliegen in XP ist die Kommunikation. Da die Arbeit an dem Projekt nicht von Einzelkämpfern, sondern von einem Team geleistet wird, ist es 

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

### Die 14 Prinzipien

### Die Praktiken

#### Planung

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

#### Design

- Einfachheit des Designs
	- Architektur nur für die in der anstehenden Iteration benötigten Kriterien entwerfen
	- daraus folgt: Gesamtarchitektur erst mit der letzten Iteration fertig
	- Funktionalität nicht früher als nötig einbauen
	- kann sein, dass andere Funktionalität später überflüssig sein wird
- Systemmetapher
	- Eine Metapher für das System, welches alle Projektbeteiligten kennen und verstehen
	- Beispiel: Automobilproduktionslinie im C3 Projekt
- CRC Karten (Class, Responsibilities and Collaboration Cards)
	- Jede Karte eine Klasse (Class)
	- schlicht, in maximal 4 Halbsätzen formulieren, was die Klasse leisten soll (Responsibilities)
	- mit welcher Klasse sie dafür in Wechselwirkung steht
- Spike Solutions
	- Prototypenhafte Implementierung eines aufgetauchten technischen Problems
	- "quick and dirty" Lösung
	- Code wird danach meist weggeworfen
- Refactoring
	- Umstrukturierung des Designs
	- mit der Zeit wird aus jedem guten Design ein schlechtes Design (Problem der *Software-Entropie*)
	- Beispiel: Interface mehrerer Klassen entwerfen, die unabhängig voneinander entworfen worden sind
	- Meistens wird gute Software mit Refactoring Unterstützung notwendig

#### Kodieren

- Der Kunde ist immer verfügbar
	- Kunde ist Teil des Teams
	- schnelle Reaktion auf sich ändernde Kundenwünsche
	- Einwand: Kunde bekommt zu viel vom Projekt (auch die Fehler) mit. Vertrauensverlust? Nein, meist das Gegenteil
	- Kommunikation mit dem Kunden ist kein Selbstläufer
- Kodierungsstandards
- Test zuerst programmieren
	- Tests ersetzen eine detailierte Spezifikation
	- Unit Tests! Systemtests eher zweitrangig
- Pair Programming
	- 2 Programmierer teilen sich 1 Computer
	- abwechelndes Denken: taktisch und strategisch
	- Beck: Qualität wird besser
	- Beck: Geschwindigkeit eines 2er Teams = 2 Einzelkämpfer
- Sequentielle Integration
	- ...
- Collective Code Ownership
- Optimiere erst zum Schluss
- Keine Überstunden

#### Testen

- Unit Tests für den gesamten Code
- Bei einem gefundenen Fehler muss ein Test generiert werden
- Akzeptanztest
	- näher an den User Stories, nicht so nah an den Software Modulen
	- ersetzen die High-Level-Spezifikationen des Systems
	- Wells: sollten automatisiert werden

### Erweiterte XP Praktiken

#### Primärpraktiken

- Team sitzt räumlich zusammen
- Komplettes Team
	- alle nötigen Fähigkeiten müssen im Team vorhanden sein
- Arbeitsumgebung: Informativ, Freiraum
- Ten-Minute Build
- Wöchentlicher Zyklus
	- Iterationslänge reduzieren auf 1 Woche
- Vierteljährlicher Zyklus
	- Viertljährliche Releases
	- vierteljährliche Reflexionssitzungen

#### Folgepraktiken

- Teamkontinuität
	- Auseinander reißen von Teams vermeiden
- Teams können schrumpfen
	- Wenn das Team mit der Zeit effektiver arbeitet, sollte der Workload trotzdem gleich bleiben, und eher die Anzahl der Teammitglieder sinken
- Ursachenanalyse
	- Beim Fund eines Fehlers: Systemtest, Unit Test, Behebung. Warum gab es vorher keinen Test?
- Tägliche Code Integration
- Vertrag mit verhandelbaren Umfang
- Pay-Per-Use
	- Kunde zahlt nur soviel, wie viel er die Software auch nutzt
	- Steigert die Motivation der Entwickler, Software zu entwickeln, die auch gerne genutzt wird


## Kanban

### Geschichte von Kanban

- Kanban kommt ursprünglich aus der Automobilindustrie
	- Toyota
	- Just in Time (Lagerbestände reduzieren - Überproduktion und Mangel eliminieren)
	- Signalkarten, um Produktionsschritte zu synchronisieren
	- Beispiel: Burger Produktion

### Transfer in die Software Welt

- Software ist keine Fließbandproduktion
- Hohes Maß an Kreativität, Ungewissheit und Variabilität
- Aber: Allgemeine Prinzipien lassen sich übernehmen (Pull, Flow)
- Software-Kanban != Produktions-Kanban

### Evolutionäres Change Management

- David Anderson
- Ausgangspunkt: Ist Zustand
- Änderungen in kleinen Schritten

### Vorteile von Kanban

- Macht Probleme im Arbeitsablauf schnell sichtbar, regt zur Diskussion an
- Durchlaufzeiten verkürzen
- Engpässe erkennen
- Überlastung von Mitarbeitern abbauen
- Prozesse vorhersagbar machen
- Akzeptanz der Beteiligten für Änderungen am Prozess erhöhen

### Prinzipien von Kanban

- Kanban Board: IST-Zustand Visualisieren
	- einfach, gut sichtbar
	- Spalte: Arbeitsschritt
	- Karte: Aufgabe
	- wichtig: IST-Zustand, nicht Soll Zustand
- Arbeit limitieren
	- Spalten haben jeweils ein Limit, wieviele Karten sie beinhalten dürfen
	- Limit: Zahl an der Spaltenüberschrift
	- WIP = Work in Progess
- Pull System
	- Aufgaben werden nicht zugewiesen, sondern eigenverantwortlich "gezogen"
	- Keine Zeitlimits
	- Vertrauen der Führungskräfte in ihre Mitarbeiter
	- Nachhaltige Entwicklungsgeschwindigkeit (mit WIP Limits)
- Systemisches Denken
	- Entscheidende Größe: Durchsatz
	- Gesamtes System muss im Auge behalten werden
	- Beispiel: Qualitative Entwicklung nimmt vielleicht viel Zeit für die Entwicklung ein, dafür ist Testing und Ausliefern viel schneller. Qualität kann, obwohl im lokalen Kontext die Entwicklung vielleicht länger dauert, im ganzen System dafür sorgen, dass der Durchsatz erhöht wird.

### Kontinuierliche Verbesserungen

- auch "Kaizen" genannt
- kleine Verbesserungen: viel Geduld
- es gibt immer Verbesserungen: Software Entwicklung ist ein flexibles Umfeld und benötig immer wieder Veränderung

#### Feedback Meetings

- Tägliches Standup Meeting vor dem Board
- aktueller Status wird kommuniziert
- blockierte Aufgaben werden angesprochen
<!-- -->
- Außerdem: Retrospektiven Treffs, um Arbeitsprozess zu reflektieren






## Scrum

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
