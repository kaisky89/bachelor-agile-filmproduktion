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
<!--TODO Quelle? -->

Aus diesen fünf Fragen ergeben sich also die fünf Bereiche, mit denen sich das Projektmanagent beschäftigt:

### Wer

Im Projektmanagement geht es um Menschen. Da diese innerhalb eines Projekt unterschiedliche Funktionen erfüllen, wird hier auch von *Rollen* gesprochen. 

### Wann

<!--TODO Muss noch weiter ausgeführt und recherchiert werden -->

<!-- Vorgehensmodelle in der Informatik beschreiben in abstrakter Form den Prozess der Software Entwicklung. Nicht nur Aktivitäten, sondern auch Rollen und Artefakte -->

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

Die Disziplin des Informatikers ist, verglichen zu anderen ingeneurischen Tätigkeiten wie z. B. der Architektur noch sehr jung. Während man in der Architektur von Projekten weiß, die bereits mehrere Jahrtausend Jahre her sind, ist die Informatik erst im letzten Jahrhundert entstanden und kann somit noch keine große Historie aufweisen. Das bedeutet einerseits, dass in vielen Bereichen der Informatik Verbesserungspotenzial besteht, andererseits gibt es 

Und genau so wie die Informatik ist auch das Management von Projekten in der Informatik vergleichsweise jung. 

Warum machen wir das?
Da die Disziplin der Software Entwicklung und somit auch das Projektmanagement von Software Projekten noch relativ jung ist.

### Wasserfallmodell

Das Wasserfallmodell ist der einfachste Ansatz, ein Software Entwicklungsprojekt umzusetzen. Hierfür können die Phasen aus <!--TODO Referenz: "Phasen in der Software Entwicklung" --> betrachtet werden. Das ganze Projekt läuft beim Wasserfallmodell diese Phasen der Reihe nach durch. Jede Phase wird dabei genau ein mal durchgeführt. Jede Phase baut auf den Ergebnissen der vorherigen Phase auf und hat als Ergebnis die Basis für die nächste Phase. Somit herrscht für jede Phase die Bedingung, dass alle vorhergehenden Phasen keine Fehler enthalten und vollständig bearbeitet wurden.

Vorteil bei diesem Modell ist die wahrgenommene Einfachheit in seiner Umsetzung. Da die Phasen, die in einem Software Projekt durchlaufen werden, aufeinander aufbauen und dadurch einen gewissen kanonischen Aufbau darstellen, bietet es sich natürlich an, diesen Aufbau genau so auch zu übernehmen.

Allerdings bietet dieses Vorgehensmodell Nachteile, die gerade in Software Entwicklung negative Konsequenzen mit sich tragen. Das Wasserfallmodell geht davon aus, dass jede Phase zu einem definierten Zeitpunkt *abgeschlossen* ist. Das bedeutet, dass es z. B. einen Zeitpunkt gibt, an dem man behaupten kann, die Spezifikation der Anforderungen sei abgeschlossen und die nächste Phase könne nun beginnen. Was geschieht nun aber, wenn in der nächsten Phase deutlich wird, dass gewisse Anforderungen nicht detailliert genug spezifiziert worden sind, oder sogar gar nicht beachtet wurden? Im Wasserfallmodell wird so etwas nicht mit in Betracht gezogen. Gerade in der Software Entwicklung ist es aber häufig der Fall, dass sich Anforderungen ändern, oder dass sie nicht klar genug spezifiziert worden sind. Da das Wasserfallmodell ein zurück gehen in eine vorherige Phase nicht vor sieht, ist es für solche Situationen nicht geeignet.

Ein weiterer Nachteil des Wasserfallmodells ist, dass Probleme *verschleppt* werden, ohne dass dies offensichtlich ist. Grund dafür ist die Tatsache, dass eine Verifikation erst am Ende des Prozesses stattfinden kann; erst, wenn der komplette Prozess der Software Entwicklung abgeschlossen ist, kann der Auftraggeber überprüfen, ob das entwickelte Software Produkt seinen Anforderungen und Erwartungen entspricht. Wenn am Ende der Entwicklung deutlich wird, dass bestimmte Anforderungen oder Funktionen nicht richtig verstanden worden sind, kann darauf nicht mehr eingegangen werden. Das Wasserfallmodell sieht eine Korrektur durch den Auftraggeber so nicht vor. Es wird also deutlich, dass im Wasserfallmodell die Gefahr besteht, durch fehlendes Feedback des Auftraggebers ein Software Produkt zu entwickeln, das nicht den *realen Anforderungen* entspricht.

### Spiralmodell

![Die Vision des Endprodukts als "Moving Target"](http://download.heart-co.de/Bildschirmfoto%202015-06-27%20um%2018.48.22.png) <!--TODO selber Zeichnen. Zitieren aus Hanser-->

<!--TODO Zitat: Barry Boehm nach Hanser -->

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


## Kanban (aus "Agiles Projektmanagement")

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

#### Messungen

- Wichtigstes Maß: Durchlaufzeit einer Arbeitsaufgabe
- Ziel: Durchlaufzeit verringern
- Viele / Alle Probleme wirken sich auf die Durchlaufzeit aus
- Weitere Kennzahlen: Menge an WIP, Fehlerrate, Termintreue, Anzahl der Blockaden.
- Nur das messen, was Erkenntnisgewinn verspricht.
- Ergebnisse für jeden gut zugänglich!

### Kanban in der Praxis

- Board in der Näher der Kaffee Maschine
- Einfache Mittel machen schnell Probleme deutlich
- Transparenz kann nur durch Vertrauen geschaffen werden
- Wenn Mitarbeiter wegen Ehrlichkeit unter Druck geraten, geht die Transparenz verloren
- Flipchart neben dem Board mit den Regeln

<!-- -->

#### WIP Limit

- Gewinn von Geschwindigkeit durch kleine WIP Limits (Little's Law)
- Kontextwechsel vermeiden
- Qualität: Multitasking führt zu Fehlern
- Überlastung vermeiden
- Engpässe vermeiden

#### Leerlaufzeiten

- Durch Leerlaufzeiten können Mitarbeiter sinnvolle Tätigkeiten machen, die schon länger auf der Strecke geblieben sind: Automatisierungen, neue Dinge lernen, liegengebliebene Aufgaben aufgreifen
- Durchsatz bleibt gleich, aber Mitarbeiter haben Zeit für Qualität und sonstiges
- Konflikt: Klassisches Management: Auslastung einzelner Mitarbeiter optimieren. Lean Thinking: Durchlaufzeiten für einzelne Aufgaben optimieren.
- Leerlaufzeit = Verbesserungspotenzial

#### Pull Prinzip

- Push: Zuweisung durch den Vorgesetzten
- Pull: Mitarbeiter "zieht" sich neue Aufgaben, wenn ausreichend Kapazität vorhanden ist
- Pull bedeutet VERTRAUEN. Dass Mitarbeiter nicht im Internet surfen, oder Kaffee trinken, sondern selbst Verantwortung übernehmen, motiviert sind, und ihr Bestes geben
- Was mit Deadlines? Serviceklassen. Aber: Wenn Tickets beschleunigt werden, ist das System nicht mehr so gut vorhersagbar.

#### Kanban verändert die Arbeit

- Vorgesetzter kann nicht sofort neue Aufgaben zuweisen
- Vorgesetzter muss sich um Probleme "nicht technischer Natur" kümmern. (Bildschirme, Möbel besorgen)
- Aber: Es geht darum, dass das Team produktiv sein kann. Durchsatz!
- Kennzahlen für die Kommunikation an das Management leicht erfassbar (Durchschnittliche Durchlaufzeit, Gesamt-Durchsatz)
- Anhand der Durchlaufzeit können Verbesserungen vorgenommen

#### Systemisches Denken

- Problem: Lokale Optimierungen führen nicht zur Verbesserung des Systems. Wenn man als Mitarbeiter nur seine lokale Umgebung sieht, dann kann man nicht über Optimierung des Systems nachdenken. Die Motivation der einzelnen Mitarbeiter wird nur in den lokalen Optimierungen liegen, und so bilden sich eher Fronten zwischen den einzelnen Prozessschritten, als das sich das Systems in seiner Gesamtheit verbessert.
- Lösung: Mitarbeiter müssen motiviert werden, ihre Arbeit im Gesamt System zu sehen. Hauptmotivation: "Wie schaffen wir es als Gesamt-System, unseren Kunden möglichst oft Ergebnisse mit möglichst viel Wert auszuliefern?"
- Grenzen aufweichen
- Manager bestimmen nicht über Mitarbeiter, sondern verbessern das System, "sodass Teams optimale Leistung bringen [...]"

### Was leistet Kanban?

- Einfache Mittel, kurze Zeit: Transparenz über akutellen Zustand und akute Probleme
- WIP-Limit: Kurze Durchlaufzeiten
- Regelmäßige Meetings / Fokus auf Durchlaufzeiten: Diskussionen / verbesserte Zusammenarbeit im Gesamtsystem
- nachhaltige Geschwindigkeit

<!-- -->

#### Kanban ist kein Wundermittel

- zeigt Probleme, das Team muss sie lösen
- zeigt kontinuierlich die Probleme im System und sorgt somit für immer wieder kleine aber stetige Verbesserungen
- Kanban selbst muss eingeführt werden. Ein Board an der Wand macht Mitarbeiter nicht zu selbstständige und Eigenverantwortliche Menschen.

### Was ist Kanban nicht?

- KEINE Entwicklungsmethode. Keinerlei Aussagen darüber, WIE entwickelt werden soll. Keine Aussage über Planung, Organisation. Nimmt die momentane Situation und sorgt in kleinen Schritten für Optimierungen.
- Keine Konkurrenz zu Vorgehensmodelle wie XP oder Scrum

### Häufige Fehler

- Kriterien für Kanban
	- Wiederkehrende Prozessschritte 
	- Bereitschaft der Beteiligten
	- Zeit für langsame Veränderungen
- Kaizen darf nicht vernachlässigt werden
- Tooleritis: Kein elektronisches Board!

## Kanban: Epping

### Begriffe

#### Wert

> Ein Wert ist ein abstraktes Ziel, das mit einem nicht verhandelbaren Nutzen verbunden ist.
> Akzeptiert eine Person einen Wert, so erkennt diese Person den Nutzen des Werts kompromisslos an. Erkennt umgekehrt eine Person den Nutzen eines Werts nicht kompromisslos an, so akzeptiert diese Person den Wert nicht.

- Werte haben fundamentalen Charakter
- schwierig, wenn Werte im Privatleben nicht mit Werten des Projektes übereinstimmen

#### Element

> Ein Element ist ein allgemeines Vorgehen, das durch einen abstrakten Wert motiviert ist und den Nutzen des Werts (oder kurz: den Wert) realisieren soll.
> Ein Wert kann durch mehrere, verschiedene Elemente realisiert werden; umgekehrt kann ein Element mehrere, verschiedene Werte realisieren.

#### Technik

> Eine Technik ist eine konkrete Umsetzung eines allgemeinen Elements.
> Ein Element kann durch mehrere, verschiedene Techniken umgesetzt werden; umgekehrt kann eine Technik mehrere, verschiedene Elemente umsetzen.

#### Vorgehensmodell

> Ein Vorgehensmodell ist eine Zusammenstellung von Elementen, die auf einem oder mehreren Werten basieren und von denen jedes durch eine oder mehrere Techniken umgesetzt wird.

<!-- -->

> Ein Vorgehensmodell ist also durch die Menge seiner Elemente charakterisiert. Aus der daraus resultierenden Menge von Werten ergibt sich für jedes Softwareentwicklungsprojekt eine projektindividuelle Kultur. In dieser sind die abstrakten Bestandteile (Werte) deutlich bestimmend, aber wenig sichtbar und die konkreten Bestandteile (Techniken) wenig bestimmend, aber deutlich sichtbar.

### Grundlagen

#### Name

- *Kan*: Signal
- *Ban*: Karte

#### Werte

David J. Anderson:

> Value first, then flow, then waste reduction/elimination.

- Value




## Scrum: Hanser

- Projekt**management**methode - Zentrales Thema: Ablauf des Projekts
- Gründer: Ken Schwaber, Jeff Sutherland
- Kein "Projektmanager"
- Wesentliches Merkmal: Sprints

### Projektrollen

- Product Owner
	- Übernimmt Sichtweise des Kunden
	- Anforderungsmanagement: Pflege von *Produktkonzept* und *Product Backlog*
	- Releasemanagement: Planung von Funktionalität, Kosten und Termine
	- Kommunikation: Team - Stakeholder
	- Product Owner braucht Vollmachten und Zeit (Vollzeit Job)
- Team
	- Selbstorganisiert und klein: Kein Teamleiter, Vollzeitmitgliedschaft der Mitglieder
	- Gemeinsames Büro: *osmotische* Kommunikation
	- Multidisziplinär / Autonom: Alle benötigten Fähigkeiten sollten vorhanden sein, aber nicht auf "traditionelle Projektrollen" beharren
- ScrumMaster
	- Prozessverantwortlicher: Freund / Coach des Teams
	- Sorgt dafür, dass Prinzipien von Scrum funktionieren. (Korrektheit des Prozesses)
	- Ziel: Team kann ich Ruhe arbeiten
	- Unterstützt den Product Owner und die Kommunikation mit dem Team (und schützt vor Einflüsse des Product Owners während eines Sprints)
	- Hindernisse beseitigen: Teampsychologie, falsch verstandene Teamrollen, ungeeigneter Product Owner.
	- Dem Team dienen: Kollegialer Führungsstil

### Der Prozess

![Schematische Darstellung des Scrum Prozesses](http://download.heart-co.de/Bildschirmfoto%202015-06-22%20um%2012.06.07.png)

- Vision des Product Owners
	- kurze Beschreibung des Produkts
	- Abschätzung des Aufwands
	- mögliche Meilensteine
- ist es Sinnvoll, das Projekt anzugehen?
- Product Backlog wird vom Product Owner gefüllt
- Team arbeitet in Sprints den Product Backlog ab

#### Sprint

- Länge max. 30 Tage. Fixe Sprintlänge, nicht variieren.

#### Sprint Planungssitzung

- Sprint Ziel definieren
- Sprint Backlog wird erstellt (=Anforderungen für das nächste Inkrement) (
- Elemente des Sprint Backlogs kommen aus dem priorisiertem Product Backlog
- Ergebnis: Realistisches Sprint Backlog. Team, das sich zu dessen Realisierung verpflichtet hat.

#### Daily Scrum

- täglich, gleicher Ort, gleiche Zeit. 
- Kurze Sitzung (Timebox: 15 Minuten). 
- Team und ScrumMaster müssen anwesend sein. 
- Product Owner sollte anwesend sein. 
- Status und Probleme ansprechen und Aufgaben besprechen.
- Jeder aus dem *Team* beantwortet folgende 3 Fragen:
	- Was habe ich seit dem letzten Daily Scrum für das Projekt getan?
	- Wass will ich bis zum nächsten Daily Scrum für das Projekt tun?
	- Was hindert mich daran, so effektiv wie möglich zu arbeiten?
- ScrumMaster und Product Owner sorgen für die Beseitigung der Probleme
- Häufige Empfehlung: *Standup Meetings*.

#### Entwicklung im Sprint

- Team entwickelt ohne Störung von außen und ohne Veränderung der Anforderungen
- Scrum: Keine Vorgaben für Entwicklungspraktiken: empfehlenswert sind agile Methoden wie z. B. aus XP

#### Sprint Review

- Präsentation und Abnahme des Software Inkrements (Vollständig und fehlerfrei) vor dem Product Owner
- Timebox: 4 Stunden
- Live Demo / Product Owner führt selbst Tests an der Software durch
- Product Owner entscheidet, ob das Ergebnis zufriedenstellend ist.

#### Sprint Retrospektive

- Timebox: 3 Stunden
- Interne Reflektion zum Sprint. Bewertung der Zusammenarbeit des Teams. Verbesserungsmaßnahmen.
- Auswahl und Entscheidung über die Verwendung agiler Praktiken.
- Teilnehmer: Team, ScrumMaster (soll). Product Owner (kann)
- Ziel: Optimierung des Prozesses

### Artefakte

#### Product Backlog

- zentrales Dokument zum Erfassen und Verwalten von Anforderungen
- 1 Item = Funktionalität
- evtl. User Storys für die Anforderungsspezifikation
- Priorisierung. Detailierung. Aufwandsschätzung

#### Sprint Backlog

 - Backlog, dass die Aufgaben des aktuellen Sprints auflistet
 - mithilfe dieser Aufgaben kann das Sprint Ziel erreicht werden
 - entsteht in der Sprint Planungssitzung
 - Aufwand ist abgeschätzt ( <= 16 Stunden )
 - Stellt den momentanen Status der Entwicklungsarbeit dar

#### Releaseplan

 - etwas umstritten: Prinzip des "Moving Targets": Ergebnis und Ziel lässt sich nicht 100% voraussagen
 - daher: Releaseplan kann sich zwischen den Sprints ändern

#### Burndown Chart

![Burndown Chart](http://download.heart-co.de/Bildschirmfoto%202015-06-22%20um%2014.33.50.png)


## Welches Vorgehensmodell ist "das Beste"?

Kann man so nicht sagen. Vorgehensmodelle müssen dem Projekt entsprechend ausgewählt werden. Manchmal kann auch ein Wasserfallmodell sinnvoll sein.

# Problemfeld Filmproduktion

## Klassisches Vorgehen in der Filmindustrie

## Artefakte

## Kategorien der Filmproduktion

### Welche Kategorien der Filmproduktion gibt es?

### Welche sind für einen agilen Ansatz interessant?

### Besonderer Kontext: Kurzer Imagefilm

## Use Cases: Erfahrungen mit Open Exchange

## EXKURS: Unterschied Imagefilm / Werbefilm
