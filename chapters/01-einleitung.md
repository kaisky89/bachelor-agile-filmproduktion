---
title: Einleitung
---

# Persönlicher Hintergrund

Die Produktion von Imagefilmen stellt die alle Beteiligten vor Herausforderungen, die in der klassischen Welt der Filmproduktion so nicht vorkommen: Ein Imagefilm ist auf der einen Seite das Ergebnis kreativen Schaffens, aber auf der anderen Seite stehen auch "harte", wirtschaftliche Interessen hinter ihm. Es existiert ein Kunde, dessen Fachsprache vom "Team", also von den Leuten, die den Imagefilm produzieren, nicht gesprochen wird. Andererseits kann nicht davon ausgegangen werden, dass der Kunde die Fachsprache der Filmproduktion kennt. Kommunikation muss aber trotzdem in beide Richtungen funktionieren, damit hier ein effektiver Gestaltungsprozess entstehen kann. 

Dies sind nur einige der Probleme, denen ich persönlich in verschiedenen Filmprojekten - sei es im Rahmen meines Studiums oder in anderen Kontexten - immer wieder begegnet bin. Das hauptsächliche Problem war oft die Frage: *"Was soll eigentlich gemacht werden?"* Und obwohl diese Frage so trivial klingt, ist das Finden der Antwort meist ein weiter Weg.

In dem Praxis Projekts in meinem Studium planten wir ein Imagefilm für ein externes Unternehmen zu drehen. Natürlich gehört zu dem organisatorischen Rahmen des Praxis Projekts ein formulierter Zeitplan. Wir machten uns also daran, Meilensteine zu setzen. Da es sich um die Produktion eines Filmes handelte, waren die Meilensteine naheliegend: Wir benutzten dafür die einzelnen Phasen der Filmproduktion wie "Konzept erstellt", "Drehbuch erstellt" und "Post Produktion abgeschlossen". Im Verlauf des Projektes bemerkten wir allerdings, dass diese Meilensteine so nicht eingehalten werden konnten: Immer wieder musste das Konzept überarbeitet werden, da Anforderungen des "Kunden" nicht von Beginn an klar waren oder sich im Verlauf des Projekts auch änderten. Mir fiel auf, dass dies Probleme sind, die auch in der Software Entwicklung vorkommen. Es stellte sich also die Frage, ob die Produktion von Imagefilmen viel Gemeinsamkeit mit der Entwicklung von Software Produkten hat. Und schnell entdeckte ich, dass wir im "Wasserfallmodell" geplant hatten, aber schlussendlich im "Spiralmodel" vorgegangen sind^[Die Begriffe werden im Verlauf der Arbeit erklärt.].

Es stellte sich die Frage, inwiefern die Imagefilmproduktion von der Softwareentwicklung lernen kann. Und ob es möglich sei, auf Basis der bereits in der Informatik bekannten agilen Vorgehensmodelle ein neues Vorgehensmodell für die Imagefilmproduktion zu entwickeln.

Dies soll Thema dieser Arbeit sein. Gleichzeitig gibt die Arbeit einen Überblick über die beiden Problemfelder, die hier behandelt werden: Die agilen Vorgehensmodelle der Informatik einerseits und der Kontext der Imagefilmproduktion andererseits. Außerdem werden Anforderungen an ein agiles Vorgehensmodell definiert, auf deren Basis zum Ende hin das entwickelte Vorgehensmodell bewertet werden kann.


# Methodik und Aufbau der Arbeit

Der strukturelle Aufbau der Arbeit wird in der Abbildung \ref{Struktureller Aufbau der Arbeit} dargestellt.

![Struktureller Aufbau der Arbeit](http://download.heart-co.de/image.png)

Zuerst wird in Kapitel \ref{Problemfeld Agile Vorgehensmodelle} der Kontext der agilen Vorgehensmodelle der Informatik vorgestellt: Es werden die Grundlagen zum Thema "Agile Vorgehensmodelle" gelegt, wobei insbesondere auf die Phasen der Softwareentwicklung, die historische Entwicklung der Vorgehensmodelle und die Unterschiede zwischen agiler und schwergewichtiger Vorgehensmodelle eingegangen wird.

Kapitel \ref{Problemfeld Filmproduktion} öffnet das Problemfeld der Imagefilmproduktion: Die Begriffe "Imagefilm" und "Imagefilmproduktion" werden definiert, analog zur Software Entwicklung werden die Phasen der Filmproduktion erläutert und es werden die verschiedenen Gewerke erklärt, die bei der Produktion eines Imagefilms beteiligt sind.

Auf Grundlage des Wissens aus Kapitel \ref{Problemfeld Filmproduktion} wird in Kapitel \ref{Anforderungen an ein agiles Vorgehensmodell} eine Anforderungsanalyse für das zu entwickelnde Vorgehensmodell durchgeführt. Hier werden mithilfe einer Stakeholder Analyse die Beteiligten des Vorgehensmodells ermittelt und dessen grobe Anforderungen identifiziert. Anschließend werden Personae entwickelt, und deren Verhalten im Kontext der Imagefilmproduktion beschrieben, um noch detailliertere Anforderungen an das Vorgehensmodell zu finden. Schlussendlich werden alle ermittelten Anforderungen zusammengeführt, kategorisiert und gewichtet.

Aus Basis der Erkenntnisse aus Kapitel \ref{Problemfeld Agile Vorgehensmodelle} wird in Kapitel \ref{Entwurf eines agilen Vorgehensmodells} ein agiles Vorgehensmodell für die Imagefilmproduktion entworfen. Es werden dabei sowohl Werte, als auch Rollen, Aktivitäten, Ablauf, Artefakte und Techniken definiert, dies das Vorgehensmodell charakterisieren.

In Kapitel \ref{Auswertung} wird das entwickelte Vorgehensmodell anhand der aufgestellten Anforderungen untersucht und bewertet, inwiefern es diesen entspricht.