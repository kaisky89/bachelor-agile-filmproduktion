---
title: Problemfeld agile Vorgehensmodelle
---

<!-- # Was ist ein Vorgehensmodell? -->

<!--TODO Hier sollten die vier Begriffe "Wert", "Element" (vielleicht besser: Prinzip), "Technik" und "Vorgehensmodell" von Epping eingeführt werden -->

<!--

Da das Thema dieser Arbeit die Entwicklung eines Vorgehensmodell ist, möchte dieser Begriff zuerst einmal definiert werden. Hierbei sollen die beiden Wörter "Vorgehen" und "Modell" zunächst separat voneinander betrachtet werden.

**Vorgehen**

Mit Vorgehen ist hier die Vorgehensweise, also die Art und Weise, wie jemand vorgeht, gemeint.

**Modell**

> Ein Modell repräsentiert die als wichtig erachteten Aspekte eines Systems.

Aus der Formulierung "als wichtig erachtet" lässt sich der Ansatz der *Abstraktion* erkennen. Ein Modell möchte Informationen auf die wesentliche Punkte beschränken, indem es unwichtige Details weglässt.

Ein *Vorgehensmodell* kann also als eine Beschreibung definiert werden, wie für eine bestimme Aufgabe vorgegangen wird. Je nach Aufgabe ist hier ein gewisses Level der Abstraktion vonnöten. Ein Vorgehensmodell beschreibt nicht die Umsetzung einer konkreten Aufgabe, sondern eher eine bestimmte *Klasse von Aufgaben* \cite{hanser}.

\cite{hanser} schreibt, dass er als Synonym zu dem Begriff Vorgehensmodell den Begriff Prozessmodell verwendet und definiert diesen Begriff wie folgt:

> Ein Software-Prozessmodell ist ein Modell für den Ablauf der Entwicklung eines Software-Systems. Dabei geht es nicht um die Darstellung des Ablaufs eines bestimmten Software-Entwicklungsprojekts, sondern einer ganzen Klasse von Projekten.

Vorgehensmodelle gehören in der Informatik zum Bereich des Projektmanagement. Projektmanagement wird laut \cite{din699015} wie folgt definiert:

> Gesamtheit von Führungsaufgaben, -organisation, -techniken und -mitteln für die Initiierung, Definition, Planung, Steuerung und den Abschluss von Projekten

Das Vorgehensmodell im Projektmanagement beantwortet die folgenden 5 Fragen:



**Wer** macht **Wann**, **Was** mit **Welchen Mitteln**, **Warum?** *(=mit welchem Ziel?)*

-->

<!--TODO Quelle? -->



<!-- Aus diesen fünf Fragen ergeben sich also die fünf Bereiche, mit denen sich das Projektmanagent beschäftigt: -->

<!-- ## Wer -->

<!-- Im Projektmanagement geht es um Menschen. Da diese innerhalb eines Projekt unterschiedliche Funktionen erfüllen, wird hier auch von *Rollen* gesprochen. -->

<!-- ## Wann -->

<!--TODO Muss noch weiter ausgeführt und recherchiert werden -->

<!-- Vorgehensmodelle in der Informatik beschreiben in abstrakter Form den Prozess der Software Entwicklung. Nicht nur Aktivitäten, sondern auch Rollen und Artefakte -->

# Phasen in der Software Entwicklung {#phasen-in-der-software-entwicklung}

Um in der Software Entwicklung von einem Auftrag zu einer fertigen und lauffähigen Software zu kommen, die am Ende beim Kunden in Betrieb genommen werden kann, sind verschiedene Aktivitäten notwendig. Als Laie könnte man meinen, Software Entwicklung sei *Programmieren*, also das schreiben von Code. Das ist nicht ganz falsch, das *Programmieren* ist tatsächlich ein Teil der Software Entwicklung. Allerdings gehören hier noch mehr Tätigkeiten dazu. Die erforderlichen Tätigkeiten der Software Entwicklung können in folgende Phasen unterteilt werden: \cite{hanser}

- Planung des Prozesses
- Spezifikation der Anforderungen
- Design
- Implementieren (Programmieren)
- Testen

Bei jedem Software-Entwicklungs-Projekt wird es nötig sein, die Aktivitäten dieser Phasen durchzuführen. Deswegen sei hier grob erklärt, was diese Phasen bedeuten und welche Aktivitäten sie beinhalten.

## Planung des Prozesses

Für jedes organisierte Handeln braucht es einen Plan, der früher oder später von dem Projektleiter oder dem Team ausgearbeitet werden soll. Je nach Vorgehensmodell werden hier die nächsten Schritte geplant und festgelegt, *welche Aktivitäten* von *wem* *wann* erledigt werden sollen. In dieser Phase wird also geplant, wie die anderen Phasen durchgeführt werden sollen.

## Spezifikation der Anforderungen

Bei Software-Entwicklungs-Projekten handelt es sich meist um Projekte, die für eine bestimmte Domäne entwickelt werden. Software ist nicht zum Selbstzweck da, sondern dient immer dazu, dem Benutzer in seinem Nutzungskontext bei der Durchführung seiner Aufgabe zu unterstützen. Dabei gilt es bei der Entwicklung der Software, den Nutzungskontext des zu entwickelnden Systems zu verstehen und auf der Grundlage dieses Verständnisses Anforderungen an das System zu formulieren.

In dieser Phase liegt der Schwerpunkt auf der Frage, **was** entwickelt werden soll.

## Design

Auf Basis der formulierten Anforderungen wird ein System entworfen. Hier werden die Entscheidungen getroffen, wie und mit welchen Hilfsmitteln das System aufgebaut wird. 

In dieser Phase liegt der Schwerpunkt auf der Frage, **wie** entwickelt werden soll.

## Implementieren

Mithilfe der Entscheidungen aus der Design Phase kann nun (endlich) programmiert werden. Die in der Design Phase festgelegten Funktionen werden den Anforderungen entsprechend kodiert.

## Testen

Nach dem Kodieren wird die Software getestet, um zu validieren, dass sowohl das *richtige Produkt* entwickelt wurde, als auch das Produkt *richtig* entwickelt wurde. 

# Historie der Vorgehensmodelle

Die Disziplin des Informatikers ist, verglichen zu anderen ingenieurischen Tätigkeiten wie z. B. der Architektur noch sehr jung. Während man in der Architektur von Projekten weiß, die bereits mehrere Jahrtausend Jahre her sind, ist die Informatik erst im letzten Jahrhundert entstanden und kann somit noch keine große Historie aufweisen. Das bedeutet einerseits, dass in vielen Bereichen der Informatik Verbesserungspotenzial besteht, andererseits gibt es 

Und genau so wie die Informatik ist auch das Management von Projekten in der Informatik vergleichsweise jung. 

Warum machen wir das?
Da die Disziplin der Software Entwicklung und somit auch das Projektmanagement von Software Projekten noch relativ jung ist.

## Wasserfallmodell

Das Wasserfallmodell ist der einfachste Ansatz, ein Software Entwicklungsprojekt umzusetzen. Hierfür können die Phasen aus <!--TODO Referenz: "Phasen in der Software Entwicklung" --> betrachtet werden. Das ganze Projekt läuft beim Wasserfallmodell diese Phasen der Reihe nach durch. Jede Phase wird dabei genau ein mal durchgeführt. Jede Phase baut auf den Ergebnissen der vorherigen Phase auf und hat als Ergebnis die Basis für die nächste Phase. Somit herrscht für jede Phase die Bedingung, dass alle vorhergehenden Phasen keine Fehler enthalten und vollständig bearbeitet wurden.

Vorteil bei diesem Modell ist die wahrgenommene Einfachheit in seiner Umsetzung. Da die Phasen, die in einem Software Projekt durchlaufen werden, aufeinander aufbauen und dadurch einen gewissen kanonischen Aufbau darstellen, bietet es sich natürlich an, diesen Aufbau genau so auch zu übernehmen.

Allerdings bietet dieses Vorgehensmodell Nachteile, die gerade in Software Entwicklung negative Konsequenzen mit sich tragen. Das Wasserfallmodell geht davon aus, dass jede Phase zu einem definierten Zeitpunkt *abgeschlossen* ist. Das bedeutet, dass es z. B. einen Zeitpunkt gibt, an dem man behaupten kann, die Spezifikation der Anforderungen sei abgeschlossen und die nächste Phase könne nun beginnen. Was geschieht nun aber, wenn in der nächsten Phase deutlich wird, dass gewisse Anforderungen nicht detailliert genug spezifiziert worden sind, oder sogar gar nicht beachtet wurden? Im Wasserfallmodell wird so etwas nicht mit in Betracht gezogen. Gerade in der Software Entwicklung ist es aber häufig der Fall, dass sich Anforderungen ändern, oder dass sie nicht klar genug spezifiziert worden sind. Da das Wasserfallmodell ein Zurück-Gehen in eine vorherige Phase nicht vorsieht, ist es für solche Situationen nicht geeignet.

Ein weiterer Nachteil des Wasserfallmodells ist, dass Probleme *verschleppt* werden, ohne dass dies offensichtlich ist. Grund dafür ist die Tatsache, dass eine Verifikation erst am Ende des Prozesses stattfinden kann; erst, wenn der komplette Prozess der Software Entwicklung abgeschlossen ist, kann der Auftraggeber überprüfen, ob das entwickelte Software Produkt seinen Anforderungen und Erwartungen entspricht. Wenn am Ende der Entwicklung deutlich wird, dass bestimmte Anforderungen oder Funktionen nicht richtig verstanden worden sind, kann darauf nicht mehr eingegangen werden. Das Wasserfallmodell sieht eine Korrektur durch den Auftraggeber so nicht vor. Es wird also deutlich, dass im Wasserfallmodell die Gefahr besteht, durch fehlendes Feedback des Auftraggebers ein Software Produkt zu entwickeln, das nicht den *realen Anforderungen* entspricht.

## Spiralmodell

Software Entwicklung nach dem Wasserfallmodell sieht aus der Sicht des Auftraggebers wie folgt aus: Nachdem der Auftragnehmer der Ansicht ist, die Anforderungen verstanden zu haben, verschwindet er für einen längeren Zeitraum von der Bildfläche und meldet sich dann nach längerer Zeit wieder mit einem *fertigem* Software Produkt. Leider ist dieses Produkt erwartungsgemäß nicht das, was der Auftraggeber wirklich braucht, und somit ist ein Teil - wenn nicht im schlimmsten Fall sogar die ganze Arbeit - der Entwicklung unbrauchbar.

Dies liegt vor allem an der Herausforderung des Auftraggebers, die Anforderungen zu identifizieren, spezifizieren und verifizieren zu können. Es gibt hier mehrere Probleme:

- Der Auftragnehmer versteht die Problemstellung des Auftragnehmers nicht richtig
- Der Auftraggeber ist sich seiner eigenen Problemstellung nicht vollständig bewusst
- Die Anforderungen ändern sich

Die Unschärfe, die diese Probleme der Anforderungsanalyse mit sich bringen, kann man als "Moving Target" bezeichnen. (siehe dazu Abbildung \ref{Die Vision des Endprodukts als Moving Target} nach \cite{hanser})

![Die Vision des Endprodukts als Moving Target](http://download.heart-co.de/Bildschirmfoto%202015-06-27%20um%2018.48.22.png)

<!--TODO selber Zeichnen-->

Barry Boehm \cite{boehm}(zitiert nach \cite{hanser}) schlug in den 1980er Jahren das Spiralmodell vor, dass einen iterativ-inkrementellen Ansatz verfolgte. Inkrementell bedeutet, anstatt das vollständige Produkt der Software auf ein mal zu entwickeln, was meist mehrere Jahre in Anspruch nimmt, wird die Software in kleineren Paketen entwickelt. Die einzelnen Pakete bauen aufeinander auf und erweitern die Software Stück für Stück um die gewünschten Funktionen. Iterativ bedeutet, dass für die Entwicklung jedes Inkrements (Pakets) die einzelnen Phasen der Software Entwicklung durchlaufen werden.

Mithilfe des Spiralmodells kann auf die Problemstellung des "Moving Targets" besser reagiert werden: Die Software wird schrittweise entwickelt und nach jedem Schritt wieder mit den Wünschen und Anforderungen des Auftraggebers oder des Anwenders abgeglichen. So kann sichergestellt werden, dass die Entwicklung der Software den Erwartungen des Auftraggebers entspricht. Bei ändernden Wünschen kann schnell darauf reagiert werden, da diese bereits in die nächste Iteration eingebaut werden können. 

Ein weiterer Vorteil des Spiralmodells ist die Möglichkeit, dem Kunden schon früh funktionierende Software zeigen zu können. Zwar sind dies zu Anfang der Entwicklung nur kleine Teilaspekte von funktionierender Software, aber der Auftraggeber bekommt schnell einen Eindruck, wie die Software später aussehen und funktionieren wird. Dies ermöglicht dem Auftragnehmer, klarer zu kommunizieren, was entwickelt wird. Durch die Präsentation bereits funktionierender Software kann der Auftraggeber außerdem sehen, welche Funktionen noch fehlen. 


# Schwergewichtige Vorgehensmodelle

Man unterscheidet zwischen schwergewichtige und leichtgewichtige Vorgehensmodelle \cite{hanser}.  

Schwergewichtige Vorgehensmodelle sind dokumentenlastig. Die Dokumentation und eine formale Strukturierung der Prozesses spielen hier eine wesentliche Rolle. Schwergewichtige Vorgehensmodelle eignen sich vor allem für die Entwicklung für Software, die in lebenskritischen Situationen zum Einsatz kommt. Das bedeutet, wenn die Fehlfunktion der Software eine Gefahr für Menschenleben birgt, oder die Entwicklung sonstiger strenger Auflagen standhalten muss und somit eine ausführliche Dokumentation und Planung wirklich notwendig ist, ist man gut beraten, sich dieser schwergewichtigen Vorgehensmodelle zu bedienen. Als Beispiel für schwergewichtige Vorgehensmodelle seien hier das V-Modell - XT und der Unified Software Development Process genannt \cite{hanser}. Die schwergewichtigen Vorgehensmodelle gelten als dokumentenlastig und damit auch als teuer, da viel Zeit und Arbeit in Dokumente investiert wird. Zwar sind auch in den schwergewichtigen Vorgehensmodelle Iterationen und das Entwickeln von Inkrementen vorhanden, allerdings gelten sie durch ihre formale Strukturierung trotzdem als eher unflexibel auf wechselnde Anforderungen.

Im Gegensatz dazu stehen die leichtgewichtigen Vorgehensmodelle, die auch als agile Vorgehensmodelle bezeichnet werden. Auf diese soll im Folgenden näher eingegangen werden.


# Agile Vorgehensmodelle

Agil bedeutet "von großer Beweglichkeit zeugend; regsam und wendig" \cite{duden}, betont in dem Kontext von Vorgehensmodellen also die Möglichkeit, auf Änderungen schnell reagieren zu können. Agile Vorgehensmodelle sind die Antwort auf die schwergewichtigen Vorgehensmodelle, die durch ihre formalisierte Struktur und den Anspruch an eine ausführliche Dokumentation als träge und unflexibel gelten. Ein Vorgehensmodell ist agil, wenn es dem *agilen Manifest* entspricht.

## Agiles Manifest

Das Agile Manifest (oder auch das "Manifest für Agile Softwareentwicklung") ist die Erklärung führender Software Entwicklungs Experten, bewusst auf die Schwergewichtigkeit in Vorgehensmodellen zu verzichten und somit ein schnelleres, flexibleres und auf Änderungen reaktionsfähigeres Vorgehen zu entwickeln. Somit entschlossen sie sich im Februar 2001 für die 4 Werte Agilen Manifests \cite{agilemanifesto}:

![Das Manifest für Agile Softwareentwicklung](http://download.heart-co.de/Bildschirmfoto%202015-06-29%20um%2014.28.14.png)

- **Individuen und Interaktionen** mehr als *Prozesse und Werkzeuge*
- **Funktionierende Software** mehr als *umfassende Dokumentation*
- **Zusammenarbeit mit dem Kunden** mehr als *Vertragsverhandlung*
- **Reagieren auf Veränderung** mehr als das *Befolgen eines Plans*

Wie auch schon in Abbildung \ref{Das Manifest für Agile Softwareentwicklung} beschrieben bedeutet das, dass die Werte auf der rechten Seite zwar immer noch als wichtig erachtet werden, aber die Werte auf der linken Seite einen höheren Stellenwert haben.

Betrachtet man z. B. den zweiten Satz:

> **Funktionierende Software** mehr als *umfassende Dokumentation*

Dies bedeutet eben nicht, dass in agilen Projekten gar nicht mehr dokumentiert wird. Dokumentation hat immer noch seinen Stellenwert. Allerdings hat funktionierende Software einen höheren Stellenwert. Da, wo Dokumentation eingesetzt werden kann, um dem Ziel der funktionierenden Software näher zu kommen, darf und soll sie auch eingesetzt werden.

Diese Interpretation kann genau so auf die anderen Sätze angewendet werden: Die Prozesse und Werkzeuge sollen die individuen und die Interaktionen unterstützen, der Vertrag soll die Zusammenarbeit mit dem Kunden fördern (dies ist meist ein nicht unkompliziertes Unterfangen) und der Plan sollte es möglich machen, auf Veränderungen reagieren zu können. 

Wichtig ist an dieser Stelle dem schnell zu entstehenden Gedanken zu widersprechen, dass agile Softwareentwicklung willkürlich, chaotisch oder gar anarchisch sei. Das stimmt so nicht. Es gibt immer noch Dokumentation, und es gibt immer noch eine Form, sich zu organisieren und einen Plan. Die Betonung liegt nur darauf, dass dieser Plan flexibel ist und Veränderungen reagieren kann.

Diese Leitsätze bilden ein Wertesystem ab, dass die Grundeinstellung in der agilen Softwareentwicklung erklärt. Für ein konkretes Vorgehen in einem Projekt gibt dies allerdings keine große Hilfestellung \cite{hanser}. Hierfür gibt es die agilen Vorgehensmodelle, die sich dem agilen Manifest verschrieben haben und auf verschiedene Art und Weise die Werte des Manifests umsetzen. Jedes dieser Vorgehensmodelle hat nicht nur andere Ansätze sondern bewegt sich auch auf verschiedenen Abstraktionsgraden. XP beispielsweise ist eher eine Ansammlung von vielen Praktiken und Methoden, wie konkret in den verschiedenen Phasen der Software Entwicklung vorgegangen wird. Hier werden Methoden fest gefordert und es wird behauptet, dass XP ohne diese Methoden nicht mehr XP ist. Scrum hingegen ist ein Meta Vorgehensmodell, welches keine konkreten Praktiken vorschreibt, sondern dem Team die Möglichkeit bietet oder sogar fordert, die Praktiken selbst zu wählen. Der unterschiedliche Ansatz der Vorgehensmodelle macht es schwierig, sie direkt miteinander zu vergleichen. Allerdings bietet sich so auch die Möglichkeiten, die Vorgehensmodelle in vielerlei Hinsicht zu kombinieren, da sie ja auf unterschiedlicher Ebene agieren und sich so nicht widersprechen sondern meist ergänzen. So steht zum Beispiel als Schlussbemerkung im Scrum Guide \cite{scrumguide}: 

> "Scrum existiert nur in seiner Gesamtheit und funktioniert sehr gut als Container für andere Techniken, Methoden und Praktiken."

Im Folgenden werden die drei populärsten Vorgehensmodelle der agilen Softwareentwicklung vorgestellt und deren Kernaspekte dargestellt.

# XP

Als erstes Vorgehensmodell soll das "eXtreme Programming" - oder kurz: XP - betrachtet werden. XP wurde von Kent Beck 1996 \cite{extremeprogramming} zum ersten mal eingesetzt und gilt als eines der ersten Vorgehensmodelle, die die Ansätze und Prinzipien von Agiler Softwareentwicklung in einem ganzheitlichem Rahmen umsetzen. <!--TODO Ist das so? Belege?--> 

Der größte Unterschied zu den anderen Vorgehensmodellen, die nachfolgend betrachtet werden, ist, dass XP klar vorschreibt, welche Methoden und Techniken für die Umsetzung des Vorgehensmodells zu benutzen sind. Scrum und Kanban sind eher Meta Modelle, das heißt, sie beschreiben das Vorgehen auf der Meta Ebene. Sie lassen ein ein individuelles Auswählen der konkreten Techniken zur Umsetzung nicht nur zu, sondern machen dies sogar erforderlich. Viele Aspekte der Umsetzung werden in diesen Modellen bewusst offen gehalten. XP ist da anders. Es schreibt ganz konkrete Praktiken und Regeln vor, die benutzt werden sollen. Kent Beck \cite{beck} (zitiert nach \cite{hanser}) verlangt sogar, dass XP nur in der Gesamtheit aller Methoden übernommen werden kann. 


## Die 5 Werte

Um die Philosophie von XP verstehen zu können, sollen zu erst die Werte von XP betrachtet werden. Diese Werte geben keine Hinweise auf konkrete Handlungsanweisungen, stellen aber das Fundament dar, auf dem XP basiert. Während sich über bestimmte Praktiken diskutieren lässt, sind diese Werte wesentliche Grundlage. Alle Beteiligten von XP sollten diese Werte bejahen können.

Die Praktiken und Regeln in XP unterliegen den 5 Werten: *Kommunikation*, *Einfachheit*, *Feedback*, *Mut* und *Respekt*.

### Kommunikation {#werte-kommunikation}

Ein zentrales Anliegen in XP ist die Kommunikation. Da die Arbeit an dem Projekt nicht von Einzelkämpfern, sondern von einem Team geleistet wird, ist es wesentlich, dass die Kommunikation innerhalb des Teams funktioniert. Aber nicht nur die interne Kommunikation ist wichtig, sondern auch die Kommunikation mit dem Auftraggeber ist in XP sehr wichtig. So schreibt XP z.B. vor, dass ein Vertreter des Auftraggebers vor Ort für das Team da ist und durchgehend ansprechbar sein muss. Durch möglichst unkomplizierte Wege kann die Kommunikation so einfach und effizient wie möglich gehalten werden und der einfachste Weg, zu kommunizieren, ist, mit dem Kommunikationspartner vor Ort zu reden.

### Einfachheit {#werte-einfachheit}

In der Software Entwicklung tendiert man schnell dazu, Funktionen komplizierter zu machen, als es sein muss. Zum Beispiel kann man eine Funktion genau so bauen, dass sie den momentanen Ansprüchen genügt, oder man kann sich überlegen, in welchen ähnlichen Situationen diese Funktion vielleicht auch noch gebraucht werden könnte um dann die Funktion so generisch wie möglich zu implementieren. In der Welt der agilen Software Entwicklung gibt als Antwort auf diese Tendenz zwei Akronyme:

- KISS: "Keep it simple, stupid" (deutsch: Halte es dumm und einfach)
- YAGNI: "You ain't gonna need it" \cite{epping}(deutsch: Du wirst es sowieso nicht brauchen)

Einfachheit bedeutet also, die Entwicklung so simpel und grundlegend zu halten, wie möglich. Es wird nicht darüber nachgedacht, was noch alles gemacht werden könnte, sondern genau das entwickelt, was wirklich auch gebraucht wird.

### Feedback

Feedback spielt in vielen Bereichen von XP eine Rolle. Feedback als wichtig zu erachten bedeutet, sich einzugestehen, dass Ergebnisse Fehler enthalten können. Es zeugt davon, sich selbst hinterfragen zu können und Arbeitsergebnisse immer wieder auf den Prüfstand legen zu lassen, um Fehler so früh wie möglich finden zu können. Diese Feedback Kultur wird sowohl intern als auch in der Kommunikation zum Kunden gelebt.

Bei der Entwicklung werden Systemtest geschrieben. Diese ersetzen die Spezifikationen von Funktionen und ermöglichen ein direktes Testen der implementierten Funktionen. Somit kann auch auch bei späterer Veränderung der Funktionen oder bei einem Refactoring sicher gestellt werden, dass alle implementierten Funktionen und Klassen wie gewünscht funktionieren. 

Das Feedback des Auftraggebers wird so früh wie möglich eingeholt. Inkrementelle Entwicklung macht es möglich, schon sehr früh dem Auftraggeber lauffähige Software zu zeigen. Dieses Feedback ist wesentlich für die weitere Entwicklung. Hier kann sehr früh nachgeprüft werden, ob sich die Entwicklung auf dem richtigen Weg befindet und ob Anforderungen und Probleme richtig verstanden wurden. Bei Kommunikation und Feedback vom Auftraggeber ist es wichtig, die Sprache des Auftraggebers zu verwenden. Hier ist es wichtig, dass das Team domänenspezifische Fachbegriffe lernt.

### Mut

In vielen Bereichen der Entwicklung mit XP ist Mut nötig. Es braucht Mut, ein Refactoring zu machen, weil man sieht, dass bestimmte Teile des entwickelten Codes unübersichtlich werden. Entwickler tendieren dazu, geschriebenen und funktionierenden Code nicht zu ändern. Es braucht auch Mut, seinen noch sehr frühen Prototypen bereits dem Auftraggeber zu zeigen. Und es braucht sicher auch Mut, sich immer wieder auf die Änderungswünsche des Auftraggebers einzulassen und nicht an dem Plan festzuhalten. Mut zeigt die Bereitschaft, aus der Komfortzone herauszutreten und Schritte für eine zielgerichtete und effiziente Entwicklung zu gehen. Transparenz gegenüber dem Auftraggeber wird zuerst oft skeptisch hinterfragt: Wenn der Kunde weiß, wie es wirklich bei der Entwicklung der Software im Team zugeht, vor welchen Problemen das Team steht und welche Fehler bei der Entwicklung unterlaufen, wird er doch nicht mehr an die Professionalität des Software Teams glauben können. Die Erfahrung zeigt aber, dass sich dieser mutige Schritt meistens mit größerem Vertrauen und Verständnis der Auftraggebers auszahlt \cite{hanser} - also eher das Gegenteil bewirkt.

### Respekt

Software Entwicklung ist eine Arbeit mit Menschen. Ob im Team oder in der Kommunikation mit dem Auftraggeber, es handelt sich um Menschen, deren Ehre respektiert werden möchte. Respekt ist für jede Art der Zusammenarbeit zwischen Menschen erforderlich, um langfristig Vertrauen und eine positive Haltung zum Gegenüber zu entwickeln.


## Die Praktiken

Auf Basis der vorgestellten Werte führt XP viele Praktiken und Regeln ein, die konkret beschreiben, wie ein agiles Handeln möglich gemacht werden kann. Diese Praktiken sind im Folgenden aufgeführt. Hierbei sei erwähnt, dass nicht alle Praktiken nur XP typisch sind. Viele Praktiken wurden übernommen. Speziell an XP ist die Zusammenstellung dieser Praktiken und das konsequente und strukturierte Benutzen dieser. 

Die Praktiken sind eingeteilt in die verschiedenen Phasen der Software Entwicklung, angelehnt an die Phasen aus dem Wasserfall Modell: *Planung*, *Managen*, *Design*, *Kodieren* und *Testen*. \cite{extremeprogramming} Die Praktiken werden hier nicht in der Tiefe aller Details besprochen. Es soll nur ein grober Überblick gegeben werden. Für eine tiefere Einarbeitung sei auf weitere Literatur verwiesen \cite{hanser} \cite{beck} \cite{extremeprogramming}.

## Praktiken der Planung

Für die Phase der Planung sieht Kent Beck \cite{beck} folgende Techniken vor.

### User Stories {#planung-user-stories}

User Stories ist eine Technik für die Anforderungsspezifikation. User Stories stellen ähnlich wie Use Cases die Benutzung des Systems aus der Anwender Sicht dar. Während allerdings Use Cases darauf aus sind, möglichst viele Details zu erfassen, reißt man mit User Stories ein bestimmtes Arbeitspaket nur an. Mithilfe von maximal drei Sätzen wird erklärt, wie eine bestimmte Funktion aus Anwender Sicht funktionieren soll. Dies dient vor allem zur groben Spezifikation der Anforderungen. Mithilfe aller User Stories soll die ganze zu entwickelnde Software beschrieben werden. Gleichzeitig dienen die User Stories auch der Einteilung in Arbeitspakete. Für Iterationen werden bestimmte User Stories ausgewählt, die dann zum nächsten Release fertig gestellt werden müssen. Somit lässt sich der Funktionsumfang des nächsten Releases klar definieren. Alle Details der Anforderungen, die in der User Story nicht verfügbar sind, sollen mit dem Kunden direkt besprochen werden. Dieser ist also die "wandelnde Spezifikation" \cite{beck}. Mithilfe von Unit Tests werden dann die herausgearbeiteten Spezifikationen festgehalten (siehe dazu auch Abschnitt \ref{Testing}).

### Releases

Releases sind mit dem Auftraggeber, dem Management und dem Entwicklungsteam festgelegte Zeitpunkte, zu denen eine definierte Menge von User Stories fertig gestellt sein sollen. Ein Release wird in XP mithilfe des "Planning-Game" \cite{c2} geplant. Hierbei legt das Entwicklungsteam fest, wie viel Zeit es für jede der verfügbaren User Stories braucht. Mithilfe der geschätzten Zeiten einigen sich dann alle Beteiligten (Management, Kunde und Team) auf einen fixen Termin, an dem eine Auswahl an User Stories fertig gestellt sein muss. Die Menge der User Stories soll so gewählt werden, dass 

- ein in sich sinnvoller Funktionsumfang der Software erreicht wird, 
- dieses Release einen möglichst hohen *business value* besitzt und
- riskante Teile der Software möglichst früh angegangen werden \cite{c2}.

Es wird empfohlen, Releases in einem zeitlichen Rahmen von 3 Monaten zu planen \cite{beck} (nach \cite{hanser}).

### Iterationen

Wie in jedem modernen Vorgehensmodell wird in XP angelehnt an das Spiralmodell mit Iterationen gearbeitet. Es wird empfohlen, Iterationen in der Länge einer Woche anzusetzen\cite{beck} (nach \cite{hanser}). Für eine Iteration nimmt sich das Team eine oder mehrere User Stories aus dem vorhandenen Pool, schreibt die nötigen Tests und verbringt den Rest der Woche dann damit, diese User Stories und die damit verbundenen Funktionen zu implementieren. Die Tests helfen dabei, zu messen, wie weit die gewünschte Funktionalität bereits implementiert wurde und bietet somit dem Entwicklungsteam immer wieder auch die Möglichkeit, sich auf die wesentlichen Anforderungen zu fokussieren. 

Hier wird deutlich, dass innerhalb einer Iteration die verschiedenen Phasen des Wasserfallmodells durchlaufen werden: Es wird mithilfe der User Stories der Verlauf der nächsten Woche geplant (Phase *Planung*), dann wird zusammen mit dem Kunden die konkreten Anforderungen spezifiziert (Phase *Anforderungsspezifikation*). Diese Spezifikation wird in Unit Tests festgehalten (Phase *Test*), um diese im Verlauf der Woche dann zu entwickeln (Phasen *Design* und *Kodieren*). 

Mithilfe der User Stories und deren geschätzten Aufwand, die innerhalb einer Iteration abgearbeitet wurden, kann die **Projektgeschwindigkeit** gemessen werden. Somit lässt sich schnell der aktuelle Stand des Projektes schätzen, so wie die Geschwindigkeit, mit der in den Iterationen gearbeitet wurde. Es ist normal, dass diese Geschwindigkeit schwankt. Falls aber über Iterationen hinweg eine unerwartete Geschwindigkeit festgestellt wird, empfiehlt sich ein neues Release Planning \cite{extremeprogramming}. 

## Praktiken des Managens

Die Phase "Managen" findet sich so nicht im Wasserfallmodell wieder. Es handelt sich hierbei auch nicht um einer zusätzliche explizite Phase, sondern eher um Rahmenbedingungen für die gesamte Entwicklungsarbeit. Die Praktiken, die hier beschrieben werden, können nicht einer bestimmten Phase zugeordnet werden. Sie bestimmen die Faktoren, die unabhängig von den Arbeitsphasen gleich bleiben.

### Offene Arbeitsumgebung {#xp-praktiken-arbeitsumgebung}

Kommunikation ist - wie schon weiter oben erwähnt - eins der Kernwerte von XP. Aus diesem Grund soll das Team nicht räumlich getrennt sein, sondern zusammen in einem informativen und offenen Raum arbeiten. So ergeben sich viele Möglichkeiten, Probleme auf möglichst schnellem Wege zu klären. Wenn ein Entwickler an einer bestimmten Stelle nicht weiterkommt, kann er direkt einen Kollegen fragen. Die Möglichkeit, direkt zu fragen, vermindert den Aufwand der Formalität von email oder den Wegen, zwischen Büroräumen zu wechseln. Außerdem ermöglicht es allen Mitgliedern des Entwicklerteams zu wissen, mit welchen Angelegenheiten sich die Kollegen gerade beschäftigen. Falls es ein Gespräch über ein Thema ist, das man als Entwickler gerade auch bearbeitet, gibt es unkompliziert die Möglichkeit, sich im Gespräch zu beteiligen. Alistair Cockburn nennt diesen Effekt "osmotische Kommunikation" \cite{cockburn} (zitiert nach \cite{krsteski}).


### Move people around

Die Tatsache, dass alle Teammitglieder in einem Raum sind - wie im Abschnitt \ref{offene-arbeitsumgebung} beschrieben, ermöglicht es auf unnötige Dokumentation zu verzichten. Bei Fragen wird direkt auf den Kollegen, der mit dem Themengebiet in Verbindung steht gesprochen. Die Dokumentation befindet sich also "in den Köpfen der Kollegen" \cite{hanser}. Dies birgt allerdings die Gefahr, dass durch den Ausfall eines einzelnen Teammitglieds das gesamte gefährdet werden kann. Diese Gefahr wird oft auch als "Truck Faktor" (Angelehnt an die Frage: *"Was passiert, wenn ein Teammitglied von einem Truck überfahren wird?"*) bezeichnet. Um das Risiko des Truck Faktors zu minimieren, werden die Aufgabengebiete der einzelnen Entwickler durchgewechselt. Somit wird sichergestellt, dass sich im Team keine Spezialisten etablieren, die als einzige wissen, wie ein bestimmter Aspekt der Software funktioniert.

Abgesehen davon, dass im schlimmsten Fall mit dem Ausscheiden eines Teammitglied gerechnet wird, wird aber empfohlen, Teams nicht bewusst auseinander zu reißen. XP betont die Dynamik innerhalb eines Teams und ist sich dessen bewusst, dass jede Änderung innerhalb der Teamkonstellation negative Auswirkungen auf den Teamgeist hat. Ausnahme bildet hier die Empfehlung, dass bei wachsender Effektivität des Teams von einer Erhöhung des Workloads abgesehen werden sollte, sondern eher das Team verkleinert werden sollte \cite{hanser}. 

### Stand-Up Meeting

Jeder Arbeitstag in XP beginnt mit einem Stand-Up Meeting. In diesem Treffen wird möglichst präzise, klar und schnell kommuniziert, wie der aktuelle Stand des Projekts ist, woran jedes Team arbeitet und was es für Probleme gibt. Zeiteffizienz spielt hier eine große Rolle, da dieses Treffen jeden Tag stattfindet und eine ineffiziente Arbeitsweise bei diesem Treffen langfristig große Folgen für die Zeiteffektivität des Teams hat. Hierbei hilft die Tatsache, dass diese Treffen - wie der Name schon andeutet - *im Stehen* abgehalten werden. Dies hat den psychologischen Effekt, dass man sich nicht lange an einem Diskussionspunkt aufhält. Man kann bei diesem Treffen also nicht von einer *Sitzung* sprechen, da sich ja keiner *setzt*.

### Fix XP when it breaks

XP ist sich der Individualität eines Software Projekts bewusst. Man sieht der Tatsache ins Auge, dass kein Software Projekt so ist wie das andere und dass Methoden, die bei einem Projekt gut funktioniert haben, nicht bei allen anderen Projekten genau so gut funktionieren. Dafür sind vierteljährige \cite{hanser} Reflektionssitzungen vorgesehen, in denen die Effektivität der momentanen Praktiken hinterfragt wird. Hier reflektiert das gesamte Team über die momentane Arbeitsweise und überprüft diese auf potenzielle Probleme. Wichtig ist hierbei, dass Probleme nicht nur angesprochen werden, sondern auch konkrete Entscheidungen getroffen werden, um diese Probleme anzugehen. XP geht davon aus, dass diese Anpassungen der Arbeitsweise zu den normalen Aktivitäten der Entwicklungsarbeit gehören und immer wieder durchgeführt werden. Deswegen wird hier bei auch die Formulierung "when" (englisch: temporale Formulierung, zu übersetzen mit "immer dann, wenn...") und nicht die Formulierung "if" (englisch: konditionale Formulierung, zu übersetzen mit "falls") benutzt.

## Praktiken des Designs

In der Design Phase wird die Systemarchitektur der zu entwickelnden Software entworfen. Hierbei ist zu beachten, dass in XP die Design Phase nicht eine Phase mit Anfang und Ende ist, sondern dass in jeder Iteration (also idealer weise wöchentlich) überdacht und den entsprechenden Anforderungen angepasst werden. Die folgenden Regeln und Praktiken gibt XP hierfür vor:

### Einfachheit des Designs

Wie schon im Abschnitt \ref{werte-einfachheit} erwähnt, soll die Architektur so einfach wie möglich gehalten werden. Generalistische Ansätze von Funktionen und Klassen, weil evtl. damit mögliche zukünftige Anforderungen erfüllt werden können, die momentan noch nicht abzusehen sind, sind zu vermeiden. 

Die Entwicklung in Iterationen stellt das Entwickler Team immer wieder vor die Herausforderung, die Architektur zu überdenken. Für jedes Inkrement muss das Team die Architektur des Systemdesigns so ändern, dass sie für die Anforderungen genau dieses Inkrements optimal ist. Falls sich Funktionen im laufe der Zeit erübrigen oder es sinnvoll ist, mehrere Klassen oder Funktionen zu einer generelleren Lösung zusammenzufassen tritt die Praxis des **Refactorings** (siehe Abschnitt \ref{refactoring}) ein. Andererseits darf Funktionalität nicht früher als notwendig eingebaut werden. Auch wenn das Team weiß, dass bestimmte Funktionalitäten in Zukunft evtl. benötigt werden: Wenn diese Funktionalität den Anforderungen der aktuellen Iteration nicht gerecht wird, wird sie auch noch nicht implementiert. Es kann möglich sein, dass sich Anforderungen bis zu dem Zeitpunkt, an dem es sich anbietet, diese Funktionalität zu implementieren, ändern und somit diese Implementation überflüssig machen.

### Systemmetapher

Die Idee hinter Systemmetaphern ist das Benutzen einer Metapher für das System, die jeder der Projektbeteiligten kennt und versteht. Das System wird dann mithilfe dieser Systemmetapher aufgebaut. Dabei hilft die Metapher, Neulingen die Struktur des Systems zu verstehen. Außerdem fällt es leichter, Namen für die einzelnen Module, Klassen und Funktionen zu finden und zu verstehen, da alle die gleiche Sprache sprechen.

Eine System Metapher lässt sich nicht unbedingt leicht finden. Im initialen Projekt, in dem XP zum ersten mal durchgeführt wurde (Das *C3 Projekt*), wurde eine Automobilproduktionslinie als Metapher verwendet, da dieses Projekt in der Branche der Automobilindustrie befand und somit alle Beteiligten die Sprache der Produktionslinie verstanden \cite{hanser}.

### CRC Karten

CRC Karten (Class, Responsibilities and Collaboration Cards) sind eine einfach Möglichkeit, schnell und zeiteffektiv im Team Systeme zu entwerfen, zu diskutieren und zu revidieren. Es werden ca. DIN A5 große Karten benutzt, die einen Teil der Software repräsentieren. Dies können konkrete Klassen sein, müssen es aber nicht. Auf die Karte wird mit einem Namen versehen ("Class") und es kann in maximal 4 Halbsätzen formuliert werden, was die Klasse leisten soll ("Responsibilities"). Zusätzlich kann noch notiert werden, mit welchen anderen Klassen diese Karte in Wechselwirkung steht ("Collaboration").

Der wesentliche Teil der Praktik besteht in der Möglichkeit, sehr schnell und flexibel über den gesamten Aufbau und die Zusammenhänge der einzelnen Klassen zu diskutieren. Hierfür befindet sich das Team an einem Tisch und legt die Karten so auf den Tisch, wie sie sich die Struktur der zu entwickelnden Software vorstellen. Es werden Vor- und Nachteile der Systemarchitektur besprochen und die Karten können immer wieder neu angeordnet werden. Die Möglichkeit, die Karten neu anzuordnen und somit also wirkliche Haptik für die Problemstellung zu entwickeln, verstärkt im Team das Denken in Objektorientierung. Da ein revidieren oder auch ein neues Anordnen der Karten nur eine Sache von einigen Sekunden ist, kann hier sehr zeiteffizient gearbeitet werden und ohne Scheu vor Revision neue Entwürfe schnell diskutiert werden \cite{hanser} \cite{extremeprogramming}.


### Spike Solutions

Spike Solutions werden dann benutzt, wenn das Team sich nicht sicher ist, wie und ob ein Problem genau zu lösen ist und wie viel Aufwand das bedeutet. Spike Solutions sind kleine Prototypen, die "quick and dirty" entwickelt werden, um technologisches Neuland auszuprobieren. Der Code sollte nicht wiederverwendet werden \cite{hanser}, aber mithilfe des technologischen "Durchstichs" zu einem bestimmten Problem kann das Team aufgrund der Erfahrungen, die es dabei macht sehr viel besser abschätzen, was an Aufwand und Komplexität hinter einem Problem steht. Außerdem kann das Team so fremde Technologien wie z.B. ein neues Framework ausprobieren, ohne zu viel Zeit in die Einarbeit zu verlieren, nur um danach festzustellen, dass das Benutzen des Frameworks nicht hilfreich ist.

### Refactoring

Wie schon im Abschnitt \ref{einfachheit-des-designs} erwähnt, gehört Refactoring zu den Praktiken von XP. Refactoring bedeutet das Umstrukturieren oder neu schreiben von Code oder Systementwürfen.

Mit der Zeit der Entwicklung wird aus jedem guten Design ein schlechtes Design \cite{hanser}. Mit jeder Iteration kommen neue Funktionen und Module zum Systementwurf hinzu. Nach einigen Iterationen lässt sich hinterfragen, ob der ursprüngliche Systementwurf für die momentanen Anforderungen des Systems der optimale ist, oder ob es nicht besser sei, einige grundlegende Veränderungen durchzuführen, oder Funktionalitäten, die sich ähnlich sind, mit einer generalistischeren Lösung zu ersetzen. Zu diesem Schritt gehört meistens Mut, denn Entwickler tendieren häufig dazu, Funktionalitäten, die einmal funktionieren, nicht mehr ändern zu wollen (ganz nach dem Motto "Never change a running system"). Durch den testgetriebenen Ansatz von XP (siehe Abschnitt \ref{Testing}) wird allerdings sichergestellt, dass die Funktionalität des Codes auch bei Änderungen erhalten bleibt.

## Praktiken des Kodierens

Für die Phase des Kodierens sieht XP folgende Praktiken vor.

### Kunde immer verfügbar

XP sieht vor, dass der Kunde immer für das Team als Ansprechpartner verfügbar ist. Konkret wird empfohlen, dass ein Experte von Kundenseite ständig zusammen bei dem Team ist \cite{extremeprogramming}. Dies mag seltsam erscheinen, muss so der Kunde während der gesamten Projektlaufzeit auf eine wichtige Ressource (einen Experten) für den eigenen Betrieb verzichten. Dies ist aber für die verschiedenen Aktivitäten, und für das agile Vorgehen notwendig. Wie schon im Abschnitt \ref{planung-user-stories} erwähnt, kann nur mithilfe des Experten vor Ort eine detaillierte Anforderungsspezifikation durchgeführt werden. Nur mithilfe des Kunden ist es beim Release Planning möglich, eine Priorisierung der User Stories nach *business value* vorzunehmen \cite{extremeprogramming}. Und nur mit dem Kunden vor Ort ist es möglich, so schnell wie möglich auf Anforderungsänderungen einzugehen.

Ein weiterer Einwand gegen die Arbeit mit dem Kunden vor Ort ist die daraus resultierende totale Transparenz des Teams und seines Fortschritts gegenüber dem Kunden. Wie auch in Abschnitt \ref{werte-kommunikation} beschrieben, könnte eine Transparenz gegenüber dem Kunden doch zu einem eher unprofessionellen Eindruck führen. Dem Kunden werden alle auftretenden Probleme und Hindernisse bekannt. Er sieht genau, wie das Team arbeitet und wo evtl. Schwächen und Hindernisse sichtbar werden. Führt dies nicht zu Vertrauensverlust des Kunden gegenüber dem Team? Die Erfahrung \cite{hanser} zeigt hier, dass durch das Einbinden des Kunden in das Team der Kunde eher ein besseres Verständnis für das Projekt entwickelt und er so eher dazu tendiert, dem Entwicklungsteam mehr zu Vertrauen.

Insgesamt scheint es viel Zeit zu sein, die der Kunde mit der ständigen Anwesenheit eines Experten vor Ort zu investieren hat. Hierbei sei erwähnt, dass für diesen Ansatz allerdings die gesamte Zeit einer ausführlichen Anforderungsanalyse mit dem Kunden gespart werden kann. Zudem kann davon ausgegangen werden, dass am die Ergebnisse durch die Anwesenheit des Experten höchstens gering von den Anforderungen des Kunden abweichen und somit die Zeit gespart werden kann, die es kostet, wenn ein System entwickelt wird, dass nicht den realen Anforderungen des Kunden entspricht \cite{extremeprogramming}.

### Kodierungsstandards verwenden

Das Verwenden von einheitlichen Kodierungsstandards sorgt dafür, dass der Code von jedem Teammitglied leicht gelesen und verstanden werden kann. Da mit Praktiken wie *move people around* (Abschnitt \ref{move-people-around}) und *collective code ownership* (Abschnitt \ref{collective-code-ownership}) gegen eine zu starke Spezialisierung der Teammitglieder gearbeitet wird, sind hier einheitliche Kodierungsstandards sehr zu begrüßen, um das Einarbeiten in Code, den man selbst nicht geschrieben hat, zu erleichtern.

### Tests zuerst programmieren

Tests ersetzen in XP eine detaillierte Spezifikation der Arbeitspakete. Außerdem ermöglicht automatisiertes Testen eine sehr zielgenaue und präzise Programmierung, um genau das an Funktionalität zu erreichen, was notwendig ist. Wells \cite{extremeprogramming} behauptet, wer Tests zuerst schreibt und dann den dazugehörigen Code entwickelt ist genau so schnell wie der, der nur den Code entwickelt. Dies lässt sich leicht damit begründen, dass der Entwickler sich schon während der Entwicklung der Tests Gedanken zu der Struktur der nötigen Lösung macht und diese danach nur noch "herunter schreiben" muss. Zudem weiß der Entwickler durch die Test genau, wann er fertig mit der Entwicklung der gewünschten Funktionalität ist: wenn alle Tests erfolgreich waren \cite{extremeprogramming}. Ohne Tests lässt sich der Status "fertig entwickelt" für eine Funktion nicht so leicht definieren. Zuletzt bieten Tests die Grundlage für ein effektives Refactoring; ohne Tests kann nicht ermittelt werden, dass die Funktionalität bestimmter Module durch das Refactoring geändert wurden \cite{hanser}.

### Pair Programming

Pair Programming ist die Praxis, dass sich zwei Entwickler zusammen mit einer Aufgabe beschäftigen. Sie sitzen dabei zusammen an einem Rechner, ein Entwickler benutzt die Tastatur und der andere sitzt daneben. Die Rollen des Schreibens und des Beobachtens werden regelmäßig zwischen den beiden Entwicklern getauscht.

Die Idee des Pair Programmings ist auf der Idee der gedanklichen Arbeitsteilung begründet: Während der Entwickler an der Tastatur auf das Problem auf taktischer Ebene angeht, macht sich sein beobachtender Kollege über die strategischen Dimensionen des Problems Gedanken.

Pair Programming hat verschiedene Vorteile. Es bietet die Möglichkeit, Wissensinseln zu vermeiden, indem mindestens zwei Entwickler über das Wissen der Codebasis für die zu entwickelnde Funktionalität verfügen \cite{wolf}. Somit können die Gefahren des *Truck Faktors* (siehe auch Abschnitt \ref{move-people-around}) reduziert werden. Wenn beide Entwickler ungefähr gleich viel Erfahrung haben, können sie sich gegenseitig gut unterstützen. Wenn ein Entwickler des Paars deutlich erfahrener als der andere ist, kann der Unerfahrene durch die Zusammenarbeit viel von dem Erfahrenen lernen. Hier gilt wieder der Wert der Kommunikation (siehe Abschnitt \ref{werte-kommunikation}), ein Reden über den Code von Angesicht zu Angesicht während man am Code Änderungen vornimmt, erweist sich als gute Grundlage, Wissenslücken zu füllen \cite{agilespmkanban}.

### Collective code ownership

Diese Regel besagt, dass jedes Teammitglied jeden Teil der Software ändern darf. Es gibt keine Einteilung der Software in gewisse Funktionsbereiche, für die dann Spezialisten verantwortlich sind. Es gibt auch keinen Chef Software Architekten, der für den Entwurf der System Architektur zuständig ist. All dies liegt in der kollektiven Verantwortung des Teams. Die kollektive Verantwortung birgt einige Chancen in sich: Dadurch, dass jedes Teammitglied über das System bescheid weiß, können falsche Aussagen über Fakten des Systems vermieden werden, da diese nicht abhängig von einem Chefarchitekten, der sich durchaus auch mal irren kann \cite{extremeprogramming}. 

Das automatisierte Testen ermöglicht es jedem Teammitglied, in beliebigen Teilen der Software Änderungen zu tätigen, ohne befürchten zu müssen, dass die Änderungen unerwünschte Seiteneffekte ergeben, die die Funktionalität der Software beeinträchtigen.

### Häufige und sequentielle Integration {#haeufige-sequenzielle-integration}

Neben der Forderung, dass häufig integriert wird, also dass ein Entwicklerteam seinen Entwicklungsfortschritt in die gemeinsame Codebasis integriert, fordert XP, dass sequentiell, also hintereinander integriert wird. \cite{extremeprogramming} \cite{hanser}

## Praktiken des Testens {#Testing}

Die Phase des Testens, die im Wasserfallmodell (siehe Abschnitt \ref{wasserfallmodell}) eine explizite Phase war ist in XP, wie schon in Abschnitt \ref{tests-zuerst-programmieren} erwähnt, in der Entwicklung der Software integriert. Die Folgenden Praktiken und Regeln sieht XP für das Testen vor.

### Unit Tests für den gesamten Code

Unit Tests, also Tests, die nah an der Funktionalität einzelner Codeabschnitte liegen, bilden die Grundlage in XP für ein zeiteffizientes entwickeln. \cite{extremeprogramming} widerspricht der Annahme, dass das Entwickeln von Tests zu viel Zeit in Anspruch nehmen würde. Wie auch schon in Abschnitt \ref{tests-zuerst-programmieren} aufgeführt, nimmt das Entwickeln des Tests als solches kaum Zeit in Anspruch, wenn man es in der Kombination mit der Entwicklung der gewünschten Funktionalität sieht. 

Allerdings bringen Tests laut \cite{extremeprogramming} dem Team im weiteren Vorgehen einen immensen Nutzen:

- Tests ermöglichen die Praktik des collectiv code ownership (siehe Abschnitt \ref{collective-code-ownership}, indem sie den Entwicklern die Angst nehmen, fremden Code zu ändern und dabei unwissend die Funktionalität zu beeinträchtigen
- Tests helfen beim Refactoring (siehe Abschnitt \ref{refactoring}), indem sie überprüfbar machen, ob die gewünschte Funktionalität des geänderten Codes immer noch gegeben ist.
- Tests fördern die Praxis der häufigen Integration (siehe Abschnitt \ref{haeufige-sequenzielle-integration}), indem sie schnell ersichtlich machen, wo bei der Integration Fehler aufgetreten sind und somit dem Entwicklerteam schnell Hinweise darauf geben, an welcher Stelle im Code etwas geändert werden muss.

### Akzeptanztest

Akzeptanztests sind näher an den User Stories als die Unit Tests. Sie bieten ein Testen der Funktionalität aus der Sicht des Benutzers und weniger aus der Sicht des Entwicklers. Somit befinden sich Akzeptanz Tests auf einer höheren Ebene der Abstraktion als die nah am Code gelegenen Unit Tests. Akzeptanztests stellen die High-Level-Spezifikationen des Systems dar \cite{hanser}.

### Ursachenanalyse

Falls in der Software ein Fehler gefunden wird, der von keinem Test abgedeckt wurde, muss zuerst mit dem Kunden zusammen ein Akzeptanztest entwickelt werden, in dem formuliert wird, wie dieser Fehler zu vermeiden ist. Dann wird untersucht, welche Software Module für diesen Akzeptanz verantwortlich sind, um entsprechenden Unit Tests zu entwickeln, die die zusätzliche Verantwortung der Software Module festlegen. Erst dann werden im Code Änderungen vorgenommen, um den Ansprüchen der Unit Tests zu genügen. Laufen die Unit Tests vollständig, sollte nun auch der neu entworfene Akzeptanztest laufen \cite{extremeprogramming}. Die Antwort auf einen gefundenen Fehler ist also ein entwickeln von Tests in "Top-Down" Richtung und eine anschließende Verifikation der Tests in "Bottom-Up" Richtung.

Nach Abschluss der Testentwicklung muss sich das Team die Frage stellen, wie es dazu kommen konnte, dass ein Fehler in der Software vorhanden war, der von keinem Test abgedeckt wurde und was getan werden kann, um weitere solcher Fehler zu vermeiden \cite{hanser}.

# Kanban

Das nächste zu betrachtende Vorgehensmodell ist Kanban. Kanban hat im Vergleich zu den beiden anderen in dieser Arbeit vorgestellten Vorgehensmodelle XP und Scrum die Besonderheit, dass es nicht für die Softwareentwicklung entworfen wurde. Ursprünglich wurde Kanban von Toyota entwickelt und diente zum Managen und Optimieren Prozessen in der Automobilherstellung. Die Tatsache, dass das Vorgehensmodell - wenn auch mit Änderungen - aus der Domäne *Automobilindustrie* in die Domäne *Softwareentwicklung* übertragen werden konnte, diente auch zum Teil als Motivation für diese Arbeit. Da Kanban nun bereits schon einmal erfolgreich in eine andere Domäne "übersetzt" <!--TODO besseres Wort--> werden konnte, gibt es also Grund genug, es als Vorgehensmodell hier genauer zu betrachten.

## Was ist Kanban?

Das Wort "Kanban" kommt aus dem japanischen: *Kan* bedeutet soviel wie *Signal* und *Ban* kann man mit *Karte* übersetzen \cite{epping}. Damit ist auch schon die ursprüngliche Idee der Technik von Kanban grob beschrieben: Mithilfe von Signalkarten zu kommunizieren, wie der Status gewisser Produktionsabläufe ist. Der Begriff *Kanban* kann an sich kann vieles bedeuten, deswegen soll im Folgenden die folgende Unterscheidung vorgenommen werden:

- *Kanban* als Vorgehensmodell
	- **Produktions-Kanban** meint das ursprüngliche Vorgehensmodell, wie es in der Produktion verwendet wird
	- **Software-Kanban** meint das Vorgehensmodell, wie es David J. Anderson in \cite{anderson} beschrieben hat.
- *Kanban* als Technik
	- Das **Kanban-Board** meint die Technik, ein Board mit Karten und Listen zu verwenden, um den IST-Zustand eines Systems zu veranschaulichen <!--TODO Referenz Technik "Kanban Board"-->

Diese Begriffe sollen im weiteren Verlauf dieser Arbeit dazu dienen, die einzelnen Bedeutungen von Kanban zu unterscheiden.<!-- Da allerdings das Kanban-Board die zentrale Technik des Software-Kanbans ist, ist eine klare Unterscheidung dieser beiden Begriffe nicht immer gegeben.--> Falls der Begriff *Kanban* ohne Zusatz erscheint, ist damit das *Software-Kanban*, also das Vorgehensmodell gemeint. <!--TODO Diesen Abschnitt nochmal schön machen...-->

Die Idee von Software-Kanban ist, mithilfe einfacher Mittel Transparenz über den aktuellen Entwicklungsstatus eines Projekts zu bekommen, und zu kommunizieren, welche Probleme gerade akut sind. Software-Kanban nutzt hierfür primär die Technik des Kanban-Boards, das dahinter liegende Wertesystem und die daraus resultierenden Prinzipien gehen aber weitaus über die Technik an sich hinaus und sollen im weiteren näher betrachtet werden.

Das Ziel von Software-Kanban ist nicht, Probleme zu lösen, sondern nur aufzuzeigen. Es gibt den Mitgliedern des Entwicklungsteams die nötigen Werkzeuge und Techniken in die Hand, Probleme und Schwachstellen in ihrer Zusammenarbeit zu sehen. Wie sie dann damit umgehen, bleibt in ihrer Hand \cite{extremeprogramming}.

### Was ist Kanban nicht?

Software-Kanban ist keine Entwicklungsmethode. Es gibt keine Aussagen darüber *wie* entwickelt werden soll. Es bezieht auch keine Stellung darüber, wie ein Entwicklungsprojekt geplant oder organisiert werden soll. Das bedeutet, Software-Kanban kann sowohl in Projekten angewandt werden, die noch nach dem klassischen Wasserfallmodell arbeiten, als auch in modernen Projekten mit iterativ-inkrementellem Ansatz.

Software-Kanban bietet somit auch in keinerlei Konkurrenz zu den Vorgehensmodellen wie XP oder Scrum \cite{agilespmkanban}. Die Idee von Software-Kanban ist nicht, ein neues Vorgehen einzuführen. Es setzt auf die vorhanden Strukturen auf und arbeitet mit kleinen Schritten der Verbesserung.


## Historie

### Produktions-Kanban

Der ursprüngliche Gedanke von Software-Kanban kommt aus der Automobilindustrie. (Das Kanban Vorgehensmodell der Automobilindustrie wird im Folgenden Produktions-Kanban genannt, eine Differenzierung mit dem Software-Kanban zu ermöglichen)

Der japanische Automobilhersteller Toyota entwickelte Produktions-Kanban, um eine Just-In-Time Produktion zu gewährleisten: Es sollte eine unnötige Überproduktion einzelner Teile in eine Produktionslinie vermieden werden, so konnte die Verschwendung von Lagerplatz eliminiert werden. Andererseits musste sichergestellt werden, dass nicht ein Mangel an Produktionsgütern vorherrschte. So entwickelte Toyota ein System, um die einzelnen Produktionsschritte miteinander zu synchronisieren: Es wurden Karten eingesetzt, um signalisieren, dass sich Bestände eines bestimmten Zwischenerzeugnisses dem Ende neigten. Die Nachproduktion wurde mithilfe dieser Karten initiiert. Somit konnte die Menge der zwischengelagerten Teile einer Produktion auf ein Minimum gebracht werden: Zwischenteile wurden erst genau dann produziert, wenn sie auch benötigt wurden.

### Beispiel Burger Produktion

Ein einfaches Beispiel, um die Technik der Signalkarte im Produktions-Kanban zu veranschaulichen, ist die Burger Produktion in einem Fast-Food Restaurant, wie sie auch in \cite{video2brainkanban} beschrieben wird. 

Dazu wird folgende Situation angenommen, wie sie in Abbildung \ref{Beispiel Burgerproduktion Teil 1} (Grafik nach \cite{video2brainkanban}) abgebildet ist.

![Beispiel Burgerproduktion Teil 1](http://download.heart-co.de/Bildschirmfoto%202015-07-04%20um%2016.50.52.png)

<!--TODO Grafik selber malen-->

Es existieren die Abteilungen *Küche* und *Verkauf*. In diesem vereinfachten Beispiel wird davon ausgegangen, dass das Restaurant nur eine Sorte von Burgern verkauft. Die *Küche* ist dafür zuständig, Burger zu produzieren. Der Verkauf nimmt Burger von der Küche und verkauft diese an die Restaurant Gäste. Die Burger werden von der Küche an den Verkauf über eine Rutsche transportiert, die auch gleichzeitig als Zwischenlager der Burger zwischen den beiden Stationen Küche und Verkauf dient. Auf der Rutsche liegen fünf Burger und eine Signalkarte (grüne Markierung). Die Signalkarte teilt die Warteschlange der Burger so ein, dass drei Burger vor und zwei Burger nach der Signalkarte liegen.

Ziel des Kanbans Systems in diesem Beispiel ist es, den Zwischenlagerbestand (Anzahl der Burger auf der Rutsche) in einer optimalen Größe zu behalten. Wenn der Lagerbestand zu groß ist, bekommen die Gäste kalte Burger, weil diese zu lange auf der Rutsche liegen mussten. Ist der Lagerbestand zu klein, müssen die Gäste auf Burger warten. Die Technik der Signalkarte will hier also den optimalen Zeitpunkt für die Küche signalisieren, Burger nach zu produzieren.

In dem Beispiel werden nun die ersten drei Burger verkauft. Die anderen Burger auf der Rutsche rutschen nach, mitsamt der Signalkarte. Der Verkauf hat nun die Signalkarte bei sich stehen und signalisiert dies der Küche (siehe Abbildung \ref{Beispiel Burgerproduktion Teil 2}).

![Beispiel Burgerproduktion Teil 2](http://download.heart-co.de/Bildschirmfoto%202015-07-04%20um%2016.51.28.png)

Die Küche produziert nun drei neue Burger und stellt diese mit der Signalkarte so auf die Rutsche, dass wieder zwei Burger hinter der Signalkarte stehen. Während die Küche die neuen Burger produziert, kann der Verkauf noch die letzten beiden Burger verkaufen (siehe Abbildung \ref{Beispiel Burgerproduktion Teil 3}).

![Beispiel Burgerproduktion Teil 3](http://download.heart-co.de/Bildschirmfoto%202015-07-04%20um%2016.52.05.png)

Aus dem Beispiel lässt sich die grundlegende Idee der Technik der Signalkarte aus dem Produktions-Kanban entnehmen. Neben dem Mechanismus der Signalisierung zeigt das Beispiel aber noch ein weiteren Aspekt auf: Die Anzahl der Burger, die die Küche bei Signalisierung produziert, wurde hier willkürlich festgelegt. Genau so auch die Anzahl der Burger, die nach einer Signalkarte als Zwischenpuffer dienen, um die Zeit der Produktion in der Küche zu überbrücken. Diese Faktoren können nun angepasst werden und so in kleinen Schritten der Verbesserung optimiert werden.

Hier kann man sehen, dass hinter der Technik der Signalkarte im Produktions-Kanban das Prinzip der kontinuierlichen Veränderung <!--TODO Referenz--> steckt: die Faktoren *Anzahl der Burger, die bei Signal produziert werden* und *Anzahl der Burger, die hinter der Signalkarte sind* lassen sich auf die jeweilige Situation so anpassen, dass sich eine optimale Lagergröße ergibt.


### Transfer in die Software Welt

Das historische Produktions-Kanban lässt sich nicht eins zu eins in der Software Welt übernehmen, da es in der Software Entwicklung nicht um Fließbandproduktion geht, in der immer wieder das gleiche geschieht. Software Entwicklung erfordert eine hohes Maß an Kreativität, und ist mit vielen Ungewissheiten und Variabilität verbunden. Allerdings lassen sich die Werte und Prinzipien sehr gut übernehmen. 

Somit entstand das Software Kanban, auf das im Folgenden näher eingegangen wird. Wichtig ist zu erwähnen, dass Software-Kanban und Produktions-Kanban nicht dasselbe ist. Sie basieren allerdings auf den gleichen Werten und den gleichen Prinzipien.


## Werte von Kanban

Die Werte von Kanban unterscheiden sich von den anderen beiden in dieser Arbeit vorgestellten Vorgehensmodelle. Das liegt daran, weil Kanban sich nicht nur dem Werte System der *Agilen Softwareentwicklung* verschreibt, sondern auch dem der *Schlanken Softwareentwicklung*. Zusammenfassend können die drei Hauptwerte mit den Worten von David J. Anderson beschrieben werden.

> "Value first, then flow, then waste reduction/elimination." \cite{anderson} (zitiert nach \cite{epping})

Hier kommen die drei 
- Value
- Flow
- Waste



### Little's Law

![Gleichung von "Little's Law"](http://download.heart-co.de/Bildschirmfoto%202015-07-03%20um%2015.34.44.png)

### Schlanke Softwareentwicklung

- keine explizite Wert Formulierung
- Aber: Epping stellt 7 Werte vor

#### Eliminate Waste

Waste ist:

- Partially Done Work
- Extra Processes
- Extra Features
- Task Switching
- Waiting
- Motion
- Defects

#### Amplify Learning

#### Decide as Late as Possible

#### Deliver as Fast as Possible

#### Empower the Team

#### Build Integrity in

#### See the Whole


## Prinzipien von Kanban

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

### Systemisches Denken

- Problem: Lokale Optimierungen führen nicht zur Verbesserung des Systems. Wenn man als Mitarbeiter nur seine lokale Umgebung sieht, dann kann man nicht über Optimierung des Systems nachdenken. Die Motivation der einzelnen Mitarbeiter wird nur in den lokalen Optimierungen liegen, und so bilden sich eher Fronten zwischen den einzelnen Prozessschritten, als das sich das Systems in seiner Gesamtheit verbessert.
- Lösung: Mitarbeiter müssen motiviert werden, ihre Arbeit im Gesamt System zu sehen. Hauptmotivation: "Wie schaffen wir es als Gesamt-System, unseren Kunden möglichst oft Ergebnisse mit möglichst viel Wert auszuliefern?"
- Grenzen aufweichen
- Manager bestimmen nicht über Mitarbeiter, sondern verbessern das System, "sodass Teams optimale Leistung bringen [...]"

### WIP Limit

- Gewinn von Geschwindigkeit durch kleine WIP Limits (Little's Law)
- Kontextwechsel vermeiden
- Qualität: Multitasking führt zu Fehlern
- Überlastung vermeiden
- Engpässe vermeiden

### Leerlaufzeiten

- Durch Leerlaufzeiten können Mitarbeiter sinnvolle Tätigkeiten machen, die schon länger auf der Strecke geblieben sind: Automatisierungen, neue Dinge lernen, liegengebliebene Aufgaben aufgreifen
- Durchsatz bleibt gleich, aber Mitarbeiter haben Zeit für Qualität und sonstiges
- Konflikt: Klassisches Management: Auslastung einzelner Mitarbeiter optimieren. Lean Thinking: Durchlaufzeiten für einzelne Aufgaben optimieren.
- Leerlaufzeit = Verbesserungspotenzial

### Pull Prinzip

- Push: Zuweisung durch den Vorgesetzten
- Pull: Mitarbeiter "zieht" sich neue Aufgaben, wenn ausreichend Kapazität vorhanden ist
- Pull bedeutet VERTRAUEN. Dass Mitarbeiter nicht im Internet surfen, oder Kaffee trinken, sondern selbst Verantwortung übernehmen, motiviert sind, und ihr Bestes geben
- Was mit Deadlines? Serviceklassen. Aber: Wenn Tickets beschleunigt werden, ist das System nicht mehr so gut vorhersagbar.

### Evolutionäres Change Management

- David Anderson
- Ausgangspunkt: Ist Zustand
- Änderungen in kleinen Schritten

### Kontinuierliche Verbesserungen

- auch "Kaizen" genannt
- kleine Verbesserungen: viel Geduld
- es gibt immer Verbesserungen: Software Entwicklung ist ein flexibles Umfeld und benötig immer wieder Veränderung

## Techniken von Kanban

### Kanban-Board

### Stand-Ups

- Tägliches Standup Meeting vor dem Board
- aktueller Status wird kommuniziert
- blockierte Aufgaben werden angesprochen


### Planungspoker

### Code Reviews 

### Continuous Integration

### Abnahmekriterien

### Messungen

- Wichtigstes Maß: Durchlaufzeit einer Arbeitsaufgabe
- Ziel: Durchlaufzeit verringern
- Viele / Alle Probleme wirken sich auf die Durchlaufzeit aus
- Weitere Kennzahlen: Menge an WIP, Fehlerrate, Termintreue, Anzahl der Blockaden.
- Nur das messen, was Erkenntnisgewinn verspricht.
- Ergebnisse für jeden gut zugänglich!

### Entwicklungsgeschwindigkeit

### Durchlaufzeit


## Vorteile von Kanban

- Macht Probleme im Arbeitsablauf schnell sichtbar, regt zur Diskussion an
- Durchlaufzeiten verkürzen
- Engpässe erkennen
- Überlastung von Mitarbeitern abbauen
- Prozesse vorhersagbar machen
- Akzeptanz der Beteiligten für Änderungen am Prozess erhöhen


















## Literatur Kanban Roock



- Regelmäßige Meetings / Fokus auf Durchlaufzeiten: Diskussionen / verbesserte Zusammenarbeit im Gesamtsystem
- nachhaltige Geschwindigkeit

### Illustration

http://www.it-agile.de/wissen/methoden/kanban/kanban-comic/



### Häufige Fehler

- Kriterien für Kanban
	- Wiederkehrende Prozessschritte 
	- Bereitschaft der Beteiligten
	- Zeit für langsame Veränderungen
- Kaizen darf nicht vernachlässigt werden
- Tooleritis: Kein elektronisches Board!

### Kanban ist kein Wundermittel

- zeigt Probleme, das Team muss sie lösen
- zeigt kontinuierlich die Probleme im System und sorgt somit für immer wieder kleine aber stetige Verbesserungen
- Kanban selbst muss eingeführt werden. Ein Board an der Wand macht Mitarbeiter nicht zu selbstständige und Eigenverantwortliche Menschen.

### Kanban verändert die Arbeit

- Vorgesetzter kann nicht sofort neue Aufgaben zuweisen
- Vorgesetzter muss sich um Probleme "nicht technischer Natur" kümmern. (Bildschirme, Möbel besorgen)
- Aber: Es geht darum, dass das Team produktiv sein kann. Durchsatz!
- Kennzahlen für die Kommunikation an das Management leicht erfassbar (Durchschnittliche Durchlaufzeit, Gesamt-Durchsatz)
- Anhand der Durchlaufzeit können Verbesserungen vorgenommen



## Literatur Kanban Epping

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



# Scrum {#problemfeld-scrum}

<!-- \cite{wirdemann2014scrum} \cite{hanser} \cite{scrumguide} -->

Scrum wurde von Ken Schwaber und Jeff Sutherland in den 90er Jahren entwickelt und zählt mittlerweile zu den "etabliertesten agilen Managamentmethoden" \cite{wirdemann2014scrum}. Scrum ist eine Projekt*management*methode, das zentrale Thema ist der Ablauf des Projekts, nicht die konkreten Techniken, die benutzt werden. Dies macht einen Transfer der Methode auf andere Domänen einfach.

Ken Schwaber und Jeff Sutherland beschreiben in dem Scrum Guide \cite{scrumguide} die wesentlichen Merkmale von Scrum. Sie definieren dabei die Rollen, den Prozessablauf, die Aktivitäten und die Artefakte, die Scrum ausmachen. Im Folgenden soll auf diese Beschreibung augebaut werden. Dabei wurde auch auf Erläuterungen von \cite{hanser} und \cite{wirdemann2014scrum} zurückgegriffen.


## Projektrollen

Scrum definiert drei verschiedene Rollen: den *Product Owner*, das *Team* und der *Scrum Master*. Diese Rollen definieren verschiedene Verantwortlichkeiten, die der Inhaber der Rolle zu übernehmen hat.

### Product Owner

Der Product Owner repräsentiert die Sichtweise des Kunden. Im besten Fall ist es der Kunde selbst, wenn nicht, so sollte es zumindest jemand sein, der in direktem und häufigen Kontakt mit dem Kunden steht. Der Product Owner hat die Verantwortung, das Product Backlog zu pflegen und Backlog Items zu priorisieren. Somit übernimmt er die Verantwortung, was wann vom Team entwickelt werden soll. Der Product Owner hat keinen Einfluss darauf, wie sich das Team innerhalb eines Sprints organisiert, oder wie die Aufgaben während eines Sprints abgearbeitet werden. Dies entscheidet allein das Team. Der Product Owner ist nur dafür verantwortlich, zu entscheiden, *was* innerhalb des Sprints bearbeitet wird.

Der Product Owner ist das Bindeglied zwischen Team und Stakeholder: Alle Fragen, die das Team an die Stakeholder hat, stellt es dem Product Owner. Der weiß entweder selbst die Antwort oder kümmert sich um schnellstmögliche Antworten, indem er sich mit den Stakeholdern in Verbindung setzt. Und auch für neue Anforderungen oder Änderungswünsche, die die Stakeholder an das Team hat, ist der Product Owner der Ansprechpartner. Somit sorgt der Product Owner für die Kommunikation zwischen Team und Stakeholder.

### Team

Das Team ist selbstorganisiert und klein: es gibt keinen Teamleiter und alle Mitglieder sind Vollzeitmitglieder in dem Projekt. Es gibt keine Teilzeit Mitglieder, die noch in anderen Projekten arbeiten. Dies sorgt dafür, dass zu jederzeit das vollständige Team verfügbar ist, dass sich das Team als eine Einheit sieht und gemeinsam Verantwortung für das Projekt übernehmen kann. 

Das Team arbeitet in einem gemeinsamen Büro: Es gibt keine Abteilungen oder sontige räumliche Trennungen zwischen den Teammitgliedern. Dies sorgt für eine osmotische Kommunikation (siehe Abschnitt \ref{xp-praktiken-arbeitsumgebung}).

Das Team ist Multidisziplinär und Autonom. Alle benötigten Fähigkeiten für das Projekt sind im Team vorhanden, sodass das Team während des Sprints nicht auf fachliche Hilfe von angewiesen ist. Dies sorgt für eine möglichst schnelle Bearbeitung der Aufgaben. Es muss auf keine Arbeit von außen gewartet werden, was zu unnötigen und unvorhergesehenen Verzögerungen des Sprintfortschritts führen könnte. Obwohl jedes Teammitglied seine Spezialisierung hat, wird im Team nicht in Abteilungen gedacht: Das Team sieht sich als eine Einheit, und alle Teammitglieder sind gleichberechtigt, Entscheidungen zu treffen. Es gibt keinen Teamleiter.

### ScrumMaster

Der Scrum Master ist verantwortlich dafür, das der Prozess von Scrum und seine Regeln eingehalten wird. Er ist der "Freund" oder "Coach" des Teams. Sein Ziel ist es, dass das Team in Ruhe arbeiten kann,  und er schützt das Team vor Einflüssen vom Product Owner oder anderen Stakeholdern während eines Sprints.

Der ScrumMaster unterstützt außerdem den Product Owner in der Kommunikation mit dem Team. Er hilft sowohl Team als auch Product Owner die Prinzipien von Scrum zu verstehen.

Gibt es Hindernisse, die ein effizientes Arbeiten des Teams gefährden, so kümmert sich der ScrumMaster um die Beseitigung dieser. Dies können nicht nur falsche Einflüsse von Stakeholder und Product Owner sein, sondern auch falsch verstandene Teamrollen, ein ungeeigneter Product Owner, oder ganz praktische Probleme, wie ein defekter Rechner eines Teammitglieds. Für die Beseitigung vieler dieser Hindernisse ist ein gewisses Feingefühl des ScrumMasters gefragt, er muss sich auf teampsychologische Aspekte einlassen und in einem kollegialen Führungsstil das Team in die Richtlinien von Scrum leiten.


## Der Prozess

Der Prozess wird in Abbildung \ref{Schematische Darstellung des Scrum Prozesses} dargestellt.

![Schematische Darstellung des Scrum Prozesses](http://download.heart-co.de/Bildschirmfoto%202015-06-22%20um%2012.06.07.png)

Zu Beginn des Prozesses erstellt der Product Owner eine Vision des Projekts: er beschreibt das Projekt kurz und schätzt grob den gesamten Aufwand und legt außerdem mögliche Meilensteine fest. Dies ist keine detaillierte Aufwandschätzung oder ähnliches, nur ein grobes Umreißen des Projekts und seinem groben Ziel. Hilfreich ist auch, das Ziel des Projekts in einem Satz zusammen zu fassen, zum Beispiel:

> "Wir wollen das einzige Job-Portal für High Professionals in Deutschland bauen." \cite{wirdemann2014scrum}

Auf Basis der Vision erstellt der Product Owner das Product Backlog und seine ersten Einträge. Diese Einträge werden dann vom Team in Sprints abgearbeitet. 


### Sprint

Der Sprint ist das Herzstück von Scrum. Ein Sprint ist ein Iterationsdurchlauf in der Entwicklung und als Ergebnis des Sprints steht immer ein Stück lauffähige Software. Die Länge des Sprints ist maximal 30 Tage. Ist die Sprintlänge festgelegt, kann sie sich während eines Sprints nicht mehr ändern. Auch von Änderungen der Sprintlängen innerhalb eines Projektes ist abzusehen, da mithilfe der Sprintlänge eine gewisse Regelmäßigkeit eingeführt wird, die dem Team hilft, bessere Abschätzungen machen zu können, und durch die Regelmäßig eine stetige Leistung bringen zu können.

### Sprint Planungssitzung

Jeder Sprint beginnt mit einer Sprint Planungssitzung. In dieser wird ein Sprint Ziel definiert, das in einer kurzen Formulierung wiedergibt, was in diesem Sprint vom Team erreicht werden soll.

In der Planungssitzung wird das Sprint Backlog erstellt, welches alle Anforderungen für das nächste Inkrement (also das Ergebnis des Sprints) enthält. Die Elemente des Sprint Backlogs werden aus dem priorisiertem Product Backlog entnommen. 

Das Ergebnis der Sprint Planungssitzung ist ein realistisches Sprint Backlog, sowie ein Team, dass sich zu dessen Realisierung verpflichtet hat.

### Daily Scrum



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

### Entwicklung im Sprint

- Team entwickelt ohne Störung von außen und ohne Veränderung der Anforderungen
- Scrum: Keine Vorgaben für Entwicklungspraktiken: empfehlenswert sind agile Methoden wie z. B. aus XP

### Sprint Review

- Präsentation und Abnahme des Software Inkrements (Vollständig und fehlerfrei) vor dem Product Owner
- Timebox: 4 Stunden
- Live Demo / Product Owner führt selbst Tests an der Software durch
- Product Owner entscheidet, ob das Ergebnis zufriedenstellend ist.

### Sprint Retrospektive

- Timebox: 3 Stunden
- Interne Reflektion zum Sprint. Bewertung der Zusammenarbeit des Teams. Verbesserungsmaßnahmen.
- Auswahl und Entscheidung über die Verwendung agiler Praktiken.
- Teilnehmer: Team, ScrumMaster (soll). Product Owner (kann)
- Ziel: Optimierung des Prozesses

## Artefakte

### Product Backlog

- zentrales Dokument zum Erfassen und Verwalten von Anforderungen
- 1 Item = Funktionalität
- evtl. User Storys für die Anforderungsspezifikation
- Priorisierung. Detailierung. Aufwandsschätzung

### Sprint Backlog

 - Backlog, dass die Aufgaben des aktuellen Sprints auflistet
 - mithilfe dieser Aufgaben kann das Sprint Ziel erreicht werden
 - entsteht in der Sprint Planungssitzung
 - Aufwand ist abgeschätzt ( <= 16 Stunden )
 - Stellt den momentanen Status der Entwicklungsarbeit dar

### Releaseplan

 - etwas umstritten: Prinzip des "Moving Targets": Ergebnis und Ziel lässt sich nicht 100% voraussagen
 - daher: Releaseplan kann sich zwischen den Sprints ändern

### Burndown Chart

![Burndown Chart](http://download.heart-co.de/Bildschirmfoto%202015-06-22%20um%2014.33.50.png)