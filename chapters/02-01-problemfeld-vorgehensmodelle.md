---
title: Problemfeld Agile Vorgehensmodelle
---

# Einleitung

## Aufbau des Kapitels

In diesem Kapitel soll das Poblemfeld der agilen Vorgehensmodelle aufgemacht werden. Die Abbildung \ref{Struktureller Aufbau von Kapitel 2} zeigt den strukturellen Aufbau des Kapitels.

![Struktureller Aufbau von Kapitel 2](http://download.heart-co.de/image-2.png)

In den Abschnitten \ref{phasen-in-der-software-entwicklung} - \ref{grundlagen-agile-vorgehensmodelle} werden die Grundlagen zum Thema "Agile Vorgehensmodelle" gelegt: 

- Abschnitt \ref{phasen-in-der-software-entwicklung} stellt die typischen Aktivitäten in der Softwareentwicklung vor und beschreibt die Phasen, die ein Softwareentwicklungsprojekt durchläuft.
- Abschnitt \ref{vorgehensmodelle-historie} behandelt die historische Entwicklung, wie aus dem klassischen Wasserfallmodell die ersten iterativen Ansätze entstanden.
- In den Abschnitten \ref{schwergewichtige-vorgehensmodelle} und \ref{grundlagen-agile-vorgehensmodelle} werden dann die beiden Ansätze von modernen Vorgehensmodellen vorgestellt, die "schwergewichtigen" und die "agilen" Vorgehensmodelle.

Auf dieser Grundlage werden in den folgenden Abschnitten auf die drei bekanntesten agilen Vorgehensmodelle detailliert eingegangen:

- In Abschnitt \ref{vorgehensmodelle-xp} wird das Vorgehensmodell "eXtreme Programming" - oder kurz XP - und vor allem seine Praktiken vorgestellt. Viele dieser Praktiken bieten eine Grundlage für die in Kapitel \ref{Entwurf eines agilen Vorgehensmodells} entwickelten Techniken.
- In Abschnitt \ref{vorgehensmodelle-kanban} wird das Vorgehensmodell Kanban mit den Prinzipien der schlanken Softwareentwicklung aber auch der Technik des Kanban Boards vorgestellt.
- In Abschnitt \ref{problemfeld-scrum} wird das Vorgehensmodell Scrum vorgestellt.

Die Ergebnisse aus diesem Kapitel sollen hauptsächlich Grundlage für Kapitel \ref{Entwurf eines agilen Vorgehensmodells} sein. Ziel dieses Kapitels ist es also, sowohl die allgemeinen Grundlagen zum Thema "Agile Vorgehensmodelle" zu legen, als auch mehrere agile Vorgehensmodelle zu betrachten. Dies soll dazu dienen, um ein agiles Vorgehensmodell entwickeln zu können.


## Definition Vorgehensmodell

Da das Thema dieser Arbeit die Entwicklung eines Vorgehensmodell ist, möchte dieser Begriff zuerst einmal definiert werden.

Ein *Vorgehensmodell* kann als eine Beschreibung definiert werden, wie für eine bestimme Aufgabe vorgegangen wird. Je nach Aufgabe ist hier ein gewisses Level der Abstraktion vonnöten. Ein Vorgehensmodell beschreibt nicht die Umsetzung einer konkreten Aufgabe, sondern eher eine bestimmte *Klasse von Aufgaben* \cite{hanser}.

Hanser \cite{hanser} schreibt, dass er als Synonym zu dem Begriff Vorgehensmodell den Begriff Prozessmodell verwendet und definiert diesen Begriff für die Software Entwicklung wie folgt:

> "Ein Software-Prozessmodell ist ein Modell für den Ablauf der Entwicklung eines Software-Systems. Dabei geht es nicht um die Darstellung des Ablaufs eines bestimmten Software-Entwicklungsprojekts, sondern einer ganzen Klasse von Projekten." \cite{hanser}

Vorgehensmodelle gehören in der Informatik zum Bereich des Projektmanagement. Projektmanagement wird wie folgt definiert:

> "Gesamtheit von Führungsaufgaben, -organisation, -techniken und -mitteln für die Initiierung, Definition, Planung, Steuerung und den Abschluss von Projekten." \cite{din699015}


# Phasen in der Software Entwicklung {#phasen-in-der-software-entwicklung}

Um in der Software Entwicklung von einem Auftrag zu einer fertigen und lauffähigen Software zu kommen, die am Ende beim Kunden in Betrieb genommen werden kann, sind verschiedene Aktivitäten notwendig. Als Laie könnte man meinen, Software Entwicklung sei *Programmieren*, also das schreiben von Code. Das ist nicht ganz falsch, das *Programmieren* ist tatsächlich ein Teil der Software Entwicklung. Allerdings gehören hier noch mehr Tätigkeiten dazu. Die erforderlichen Tätigkeiten der Software Entwicklung können in folgende Phasen unterteilt werden: \cite{hanser}

- Planung des Prozesses
- Spezifikation der Anforderungen
- Design
- Implementieren (Programmieren)
- Testen

Bei jedem Software-Entwicklungs-Projekt wird es nötig sein, die Aktivitäten dieser Phasen durchzuführen. Deswegen sei hier grob erklärt, was diese Phasen bedeuten und welche Aktivitäten sie beinhalten.

## Planung des Prozesses

Für jedes organisierte Handeln braucht es einen Plan, der früher oder später von dem Projektleiter oder dem Team ausgearbeitet werden soll. Je nach Vorgehensmodell werden hier die nächsten Schritte geplant und festgelegt, *welche Aktivitäten* von *wem*, *wann* erledigt werden sollen. In dieser Phase wird also geplant, wie die anderen Phasen durchgeführt werden sollen.

## Spezifikation der Anforderungen

Bei Software-Entwicklungs-Projekten handelt es sich meist um Projekte, die für eine bestimmte Domäne entwickelt werden. Software ist nicht zum Selbstzweck da, sondern dient immer dazu, dem Benutzer in seinem Nutzungskontext bei der Durchführung seiner Aufgabe zu unterstützen. Dabei gilt es diesen Kontext erst zu verstehen und auf dieser Grundlage Anforderungen an das System zu formulieren.

In dieser Phase liegt der Schwerpunkt auf der Frage, **was** entwickelt werden soll.

## Design

Auf Basis der formulierten Anforderungen wird ein System entworfen. Hier werden die Entscheidungen getroffen, wie und mit welchen Hilfsmitteln es aufgebaut wird. 

In dieser Phase liegt der Schwerpunkt auf der Frage, **wie** entwickelt werden soll.

## Implementieren

Mithilfe der Entscheidungen aus der Design Phase kann nun (endlich) programmiert werden. Die in der Design Phase festgelegten Funktionen werden den Anforderungen entsprechend kodiert.

## Testen

Nach dem Kodieren wird die Software getestet, um zu validieren, dass sowohl das *richtige Produkt*, als auch das Produkt *richtig* entwickelt wurde. 

# Historie der Vorgehensmodelle {#vorgehensmodelle-historie}

## Wasserfallmodell

Hanser \cite{hanser} beschreibt das Wasserfallmodell als den einfachsten Ansatz, ein Software Entwicklungsprojekt umzusetzen. Hierfür können die Phasen aus Abschnitt \ref{phasen-in-der-software-entwicklung} betrachtet werden. Das ganze Projekt läuft beim Wasserfallmodell diese Phasen der Reihe nach durch. Jede Phase wird dabei nur ein mal durchgeführt. Jede Phase baut auf den Ergebnissen der vorherigen Phase auf. Somit herrscht für jede Phase die Bedingung, dass alle vorhergehenden Phasen keine Fehler enthalten und vollständig bearbeitet wurden.

Vorteil bei diesem Modell ist die wahrgenommene Einfachheit in seiner Umsetzung. Da die Phasen, die in einem Software Projekt durchlaufen werden, aufeinander aufbauen und dadurch einen gewissen kanonischen Aufbau darstellen, bietet es sich natürlich an, diesen Aufbau genau so auch zu übernehmen.

Allerdings bietet dieses Vorgehensmodell Nachteile, die gerade in Software Entwicklung negative Konsequenzen mit sich tragen. Das Wasserfallmodell geht davon aus, dass jede Phase zu einem definierten Zeitpunkt *abgeschlossen* ist. Das bedeutet, dass es z. B. einen Zeitpunkt gibt, an dem man behaupten kann, die Spezifikation der Anforderungen sei abgeschlossen und die nächste Phase könne nun beginnen. Was geschieht nun aber, wenn in der nächsten Phase deutlich wird, dass gewisse Anforderungen nicht detailliert genug spezifiziert worden sind, oder sogar gar nicht beachtet wurden? Im Wasserfallmodell wird so etwas nicht mit in Betracht gezogen. Gerade in der Software Entwicklung ist dies aber häufig der Fall. Da das Wasserfallmodell ein Zurück-Gehen in eine vorherige Phase nicht vorsieht, ist es für solche Situationen nicht geeignet.

Ein weiterer Nachteil des Wasserfallmodells ist, dass Probleme *verschleppt* werden, ohne dass dies offensichtlich ist. Grund dafür ist die Tatsache, dass eine Verifikation erst am Ende des Prozesses stattfinden kann; erst, wenn der komplette Prozess der Software Entwicklung abgeschlossen ist, kann der Auftraggeber überprüfen, ob das entwickelte Software Produkt seinen Anforderungen und Erwartungen entspricht. Wenn am Ende der Entwicklung deutlich wird, dass bestimmte Anforderungen oder Funktionen nicht richtig verstanden worden sind, kann darauf nicht mehr eingegangen werden. Das Wasserfallmodell sieht eine Korrektur durch den Auftraggeber so nicht vor. Es wird also deutlich, dass im Wasserfallmodell die Gefahr besteht, durch fehlendes Feedback des Auftraggebers ein Software Produkt zu entwickeln, das nicht den *realen Anforderungen* entspricht.

## Spiralmodell

Software Entwicklung nach dem Wasserfallmodell sieht aus der Sicht des Auftraggebers wie folgt aus: Nachdem der Auftragnehmer der Ansicht ist, die Anforderungen verstanden zu haben, verschwindet er für einen längeren Zeitraum aus dem Blickfeld des Auftraggebers und meldet sich dann nach längerer Zeit wieder mit einem *fertigem* Software Produkt. Leider ist dieses Produkt erwartungsgemäß nicht das, was der Auftraggeber wirklich braucht, und somit ist ein Teil - wenn nicht im schlimmsten Fall sogar die ganze Arbeit - der Entwicklung unbrauchbar.

Dies liegt vor allem an der Herausforderung des Auftraggebers, die Anforderungen zu identifizieren, spezifizieren und verifizieren zu können. Es gibt hier mehrere Probleme:

- Der Auftragnehmer versteht die Problemstellung des Auftraggebers nicht richtig
- Der Auftraggeber ist sich seiner eigenen Problemstellung nicht vollständig bewusst
- Die Anforderungen ändern sich

Die Unschärfe, die diese Probleme der Anforderungsanalyse mit sich bringen, kann man als "Moving Target" bezeichnen. (siehe dazu Abbildung \ref{Die Vision des Endprodukts als Moving Target} nach \cite{hanser})

![Die Vision des Endprodukts als Moving Target](http://download.heart-co.de/Bildschirmfoto%202015-06-27%20um%2018.48.22.png)

<!--TODO selber Zeichnen-->

Barry Boehm \cite{boehm}(zitiert nach \cite{hanser}) schlug in den 80er Jahren des 20. Jahrhunderts das Spiralmodell vor, das einen iterativ-inkrementellen Ansatz verfolgte. Inkrementell bedeutet, anstatt das vollständige Produkt der Software auf einmal zu entwickeln, was meist mehrere Jahre in Anspruch nimmt, wird die Software in kleineren Paketen entwickelt. Die einzelnen Pakete bauen aufeinander auf und erweitern die Software Stück für Stück um die gewünschten Funktionen. Iterativ bedeutet, dass für die Entwicklung jedes Inkrements (Pakets) die einzelnen Phasen der Software Entwicklung durchlaufen werden.

Mithilfe des Spiralmodells kann auf die Problemstellung des "Moving Targets" besser reagiert werden: Die Software wird schrittweise entwickelt und nach jedem Schritt wieder mit den Wünschen und Anforderungen des Auftraggebers oder des Anwenders abgeglichen. So kann sichergestellt werden, dass die Entwicklung der Software den Erwartungen des Auftraggebers entspricht. Bei ändernden Wünschen kann schnell darauf reagiert werden, da diese bereits in die nächste Iteration eingebaut werden können. 

Ein weiterer Vorteil des Spiralmodells ist die Möglichkeit, dem Kunden schon früh funktionierende Software zeigen zu können. Zwar sind dies zu Anfang der Entwicklung nur kleine Teilaspekte von funktionierender Software, aber der Auftraggeber bekommt schnell einen Eindruck, wie die Software später aussehen und funktionieren wird. Dies ermöglicht dem Auftragnehmer, klarer zu kommunizieren, was entwickelt wird. Durch die Präsentation bereits funktionierender Software kann der Auftraggeber außerdem sehen, welche Funktionen noch fehlen. 


# Schwergewichtige Vorgehensmodelle {#schwergewichtige-vorgehensmodelle}

Man unterscheidet zwischen schwergewichtigen und leichtgewichtigen Vorgehensmodelle \cite{hanser}.  

Schwergewichtige Vorgehensmodelle sind dokumentenlastig. Die Dokumentation und eine formale Strukturierung der Prozesses spielen hier eine wesentliche Rolle. Schwergewichtige Vorgehensmodelle eignen sich vor allem für die Entwicklung für Software, die in lebenskritischen Situationen zum Einsatz kommt. Das bedeutet, wenn die Fehlfunktion der Software eine Gefahr für Menschenleben birgt, oder die Entwicklung sonstiger strenger Auflagen standhalten muss und somit eine ausführliche Dokumentation und Planung wirklich notwendig ist, ist man gut beraten, sich dieser schwergewichtigen Vorgehensmodelle zu bedienen. Als Beispiel für schwergewichtige Vorgehensmodelle seien hier das V-Modell - XT und der Unified Software Development Process genannt \cite{hanser}. Die schwergewichtigen Vorgehensmodelle gelten als dokumentenlastig und damit auch als teuer, da viel Zeit und Arbeit in Dokumente investiert wird. Zwar sind auch in den schwergewichtigen Vorgehensmodelle Iterationen und das Entwickeln von Inkrementen vorhanden, allerdings gelten sie durch ihre formale Strukturierung trotzdem als eher unflexibel auf wechselnde Anforderungen.

Im Gegensatz dazu stehen die leichtgewichtigen Vorgehensmodelle, die auch als agile Vorgehensmodelle bezeichnet werden. Auf diese soll im Folgenden näher eingegangen werden.


# Agile Vorgehensmodelle {#grundlagen-agile-vorgehensmodelle}

Agil bedeutet "von großer Beweglichkeit zeugend; regsam und wendig" \cite{duden}, betont in dem Kontext von Vorgehensmodellen also die Möglichkeit, schnell auf Änderungen reagieren zu können. Agile Vorgehensmodelle sind die Reaktion auf die Unflexibilität und die Trägheit schwergewichtiger Vorgehensmodelle. Ein Vorgehensmodell ist agil, wenn es dem *agilen Manifest* entspricht.

## Agiles Manifest

Das Agile Manifest (oder auch das "Manifest für Agile Softwareentwicklung") ist die Erklärung führender Software Entwicklungs Experten, bewusst auf die Schwergewichtigkeit in Vorgehensmodellen zu verzichten und somit ein schnelleres, flexibleres und auf Änderungen reaktionsfähigeres Vorgehen zu entwickeln. Somit entschlossen sie sich im Februar 2001 für die 4 Werte Agilen Manifests \cite{agilemanifesto}. Siehe hierfür Abbildung \ref{Das Manifest für Agile Softwareentwicklung}.

![Das Manifest für Agile Softwareentwicklung](http://download.heart-co.de/Bildschirmfoto%202015-06-29%20um%2014.28.14.png)

Wie auch schon in Abbildung \ref{Das Manifest für Agile Softwareentwicklung} beschrieben, bedeutet das, dass die Werte auf der rechten Seite zwar immer noch als wichtig erachtet werden, aber die Werte auf der linken Seite einen höheren Stellenwert haben.

Betrachtet man z. B. den zweiten Satz:

> **Funktionierende Software** mehr als *umfassende Dokumentation*

Dies bedeutet eben nicht, dass in agilen Projekten gar nicht mehr dokumentiert wird. Dokumentation hat immer noch seinen Stellenwert. Allerdings hat funktionierende Software einen höheren Stellenwert. Da, wo Dokumentation eingesetzt werden kann, um dem Ziel der funktionierenden Software näher zu kommen, darf und soll sie auch eingesetzt werden.

Diese Interpretation kann genau so auf die anderen Sätze angewendet werden: Die Prozesse und Werkzeuge sollen die Individuen und die Interaktionen unterstützen, der Vertrag soll die Zusammenarbeit mit dem Kunden fördern (dies ist meist ein nicht unkompliziertes Unterfangen) und der Plan sollte es möglich machen, auf Veränderungen reagieren zu können. 

Wichtig ist an dieser Stelle dem schnell entstehenden Gedanken zu widersprechen, dass agile Softwareentwicklung willkürlich, chaotisch oder gar anarchisch sei. Das stimmt so nicht. Es gibt immer noch Dokumentation, und es gibt immer noch eine Form, sich zu organisieren und einen Plan. Die Betonung liegt nur darauf, dass dieser Plan flexibel ist und auf Veränderungen reagieren kann.

Diese Leitsätze bilden ein Wertesystem, dass die Grundeinstellung in der agilen Softwareentwicklung erklärt. Für ein konkretes Vorgehen in einem Projekt gibt dies allerdings keine große Hilfestellung \cite{hanser}. Hierfür gibt es die agilen Vorgehensmodelle, die sich dem agilen Manifest verschrieben haben und die Werte des Manifests auf verschiedene Art und Weise umsetzen. Jedes dieser Vorgehensmodelle hat nicht nur andere Ansätze sondern, bewegt sich auch auf verschiedenen Abstraktionsgraden. XP beispielsweise ist eher eine Ansammlung von vielen Praktiken und Methoden, die beschreiben, wie konkret in den verschiedenen Phasen der Software Entwicklung vorgegangen wird. Hier werden Methoden fest gefordert und es wird behauptet, dass XP ohne diese Methoden nicht mehr XP ist. Scrum hingegen ist ein Meta Vorgehensmodell, welches keine konkreten Praktiken vorschreibt, sondern dem Team die Möglichkeit bietet oder sogar fordert, die Praktiken selbst zu wählen. Der unterschiedliche Ansatz der Vorgehensmodelle macht es schwierig, sie direkt miteinander zu vergleichen. Allerdings bietet sich so auch die Möglichkeit, die Vorgehensmodelle in vielerlei Hinsicht zu kombinieren, da sie ja auf unterschiedlicher Ebene agieren und sich so nicht widersprechen, sondern meist ergänzen. So steht zum Beispiel als Schlussbemerkung im Scrum Guide: 

> "Scrum existiert nur in seiner Gesamtheit und funktioniert sehr gut als Container für andere Techniken, Methoden und Praktiken." \cite{scrumguide}

Im Folgenden werden die drei populärsten Vorgehensmodelle der agilen Softwareentwicklung vorgestellt und deren Kernaspekte dargestellt.

# XP {#vorgehensmodelle-xp}

Als erstes Vorgehensmodell soll das "eXtreme Programming" - oder kurz: XP - betrachtet werden. XP wurde von Kent Beck 1996 \cite{extremeprogramming} zum ersten mal eingesetzt und gilt als eines der ersten Vorgehensmodelle, die die Ansätze und Prinzipien von Agiler Softwareentwicklung in einem ganzheitlichem Rahmen umsetzen. <!--TODO Ist das so? Belege?--> 

Der größte Unterschied zu den anderen Vorgehensmodellen, die nachfolgend betrachtet werden, ist, dass XP klar vorschreibt, welche Methoden und Techniken für die Umsetzung des Vorgehensmodells zu benutzen sind. Scrum und Kanban sind eher Meta Modelle, das heißt, sie beschreiben das Vorgehen auf der Meta Ebene. Sie lassen ein individuelles Auswählen der konkreten Techniken zur Umsetzung nicht nur zu, sondern machen dies sogar erforderlich. Viele Aspekte der Umsetzung werden in diesen Modellen bewusst offen gehalten. XP ist da anders. Es schreibt ganz konkrete Praktiken und Regeln vor, die benutzt werden sollen. Kent Beck \cite{beck} (zitiert nach \cite{hanser}) verlangt sogar, dass XP nur in der Gesamtheit aller Methoden übernommen werden kann. 


## Die 5 Werte

Um die Philosophie von XP verstehen zu können, sollen zuerst die Werte von XP betrachtet werden. Diese Werte geben keine Hinweise auf konkrete Handlungsanweisungen, stellen aber das Fundament dar, auf dem XP basiert. Während sich über bestimmte Praktiken diskutieren lässt, sind diese Werte wesentliche Grundlage. Alle Beteiligten von XP sollten diese Werte bejahen können.

Die Praktiken und Regeln in XP unterliegen den 5 Werten: *Kommunikation*, *Einfachheit*, *Feedback*, *Mut* und *Respekt*.

### Kommunikation {#werte-kommunikation}

Ein zentrales Anliegen in XP ist die Kommunikation. Da die Arbeit an dem Projekt nicht von Einzelkämpfern, sondern von einem Team geleistet wird, ist es wesentlich, dass die Kommunikation innerhalb des Teams funktioniert. Aber nicht nur die interne Kommunikation ist wichtig, sondern auch die Kommunikation mit dem Auftraggeber ist in XP sehr wichtig. So schreibt XP z.B. vor, dass ein Vertreter des Auftraggebers vor Ort für das Team da ist und durchgehend ansprechbar sein muss. Dies ist die unkomplizierteste und effizienteste Art der Kommunikation mit dem Auftraggeber.

### Einfachheit {#werte-einfachheit}

In der Software Entwicklung tendiert man schnell dazu, Funktionen komplizierter zu machen, als es sein muss. Zum Beispiel kann man eine Funktion genau so bauen, dass sie den momentanen Ansprüchen genügt (einfach). Oder man kann sich überlegen, in welchen ähnlichen Situationen diese Funktion vielleicht auch noch gebraucht werden könnte um dann die Funktion so generisch wie möglich zu implementieren (kompliziert). In der Welt der agilen Software Entwicklung gibt es als Antwort auf diese Tendenz zwei Akronyme:

- KISS: "Keep it simple, stupid" (deutsch: Halte es dumm und einfach)
- YAGNI: "You ain't gonna need it" \cite{epping}(deutsch: Du wirst es sowieso nicht brauchen)

Einfachheit bedeutet also, die Entwicklung so simpel und grundlegend zu halten, wie möglich. Es wird nicht darüber nachgedacht, was noch alles gemacht werden könnte, sondern genau das entwickelt, was wirklich auch gebraucht wird.

### Feedback

Feedback spielt in vielen Bereichen von XP eine Rolle. Feedback als wichtig zu erachten bedeutet, sich einzugestehen, dass Ergebnisse Fehler enthalten können. Es zeugt davon, sich selbst hinterfragen zu können und Arbeitsergebnisse immer wieder auf den Prüfstand zu legen, um Fehler so früh wie möglich finden zu können. Diese Feedback Kultur wird sowohl intern als auch in der Kommunikation zum Kunden gelebt.

Bei der Entwicklung werden Systemtests geschrieben. Diese ersetzen die Spezifikationen von Funktionen und ermöglichen ein direktes Testen der implementierten Funktionen. Somit kann auch bei späterer Veränderung der Funktionen oder bei einem Refactoring sicher gestellt werden, dass alle implementierten Funktionen und Klassen wie gewünscht funktionieren. 

Das Feedback des Auftraggebers wird so früh wie möglich eingeholt. Inkrementelle Entwicklung macht es möglich, schon sehr früh dem Auftraggeber lauffähige Software zu zeigen. Dieses Feedback ist wesentlich für die weitere Entwicklung. Hier kann sehr früh nachgeprüft werden, ob sich die Entwicklung auf dem richtigen Weg befindet und ob Anforderungen und Probleme richtig verstanden wurden. Bei Kommunikation und Feedback vom Auftraggeber ist es wichtig, die Sprache des Auftraggebers zu verwenden. Hier ist es wichtig, dass das Team domänenspezifische Fachbegriffe lernt.

### Mut

In vielen Bereichen der Entwicklung mit XP ist Mut nötig. Es braucht Mut, ein Refactoring zu machen, weil man sieht, dass bestimmte Teile des entwickelten Codes unübersichtlich werden. Entwickler tendieren dazu, geschriebenen und funktionierenden Code nicht zu ändern. Es braucht auch Mut, dem Auftraggeber bereits seinen noch sehr frühen Prototypen zu zeigen. Und es braucht sicher auch Mut, sich immer wieder auf die Änderungswünsche des Auftraggebers einzulassen und nicht an dem Plan festzuhalten. Mut zeigt die Bereitschaft, aus der Komfortzone herauszutreten und Schritte für eine zielgerichtete und effiziente Entwicklung zu gehen. Transparenz gegenüber dem Auftraggeber wird zuerst oft skeptisch hinterfragt: Wenn der Kunde weiß, wie es bei der Entwicklung der Software im Team wirklich zugeht, vor welchen Problemen das Team steht und welche Fehler bei der Entwicklung auftreten, wird er doch nicht mehr an die Professionalität des Software Teams glauben können. Die Erfahrung zeigt aber, dass sich dieser mutige Schritt meistens mit größerem Vertrauen und Verständnis der Auftraggebers auszahlt \cite{hanser} - also eher das Gegenteil bewirkt.

### Respekt

Software Entwicklung ist eine Arbeit mit Menschen. Ob im Team oder in der Kommunikation mit dem Auftraggeber, es handelt sich um Menschen, deren Ehre respektiert werden möchte. Respekt ist für jede Art der Zusammenarbeit zwischen Menschen erforderlich, um langfristig Vertrauen und eine positive Haltung zum Gegenüber zu entwickeln.


## Die Praktiken {#xp-praktiken}

Auf Basis der vorgestellten Werte führt XP viele Praktiken und Regeln ein, die konkret beschreiben, wie ein agiles Handeln möglich gemacht werden kann. Diese Praktiken sind im Folgenden aufgeführt. Hierbei sei erwähnt, dass nicht alle Praktiken nur XP typisch sind. Viele Praktiken wurden übernommen. Speziell an XP ist die Zusammenstellung dieser Praktiken und das konsequente und strukturierte Benutzen dieser. 

Die Praktiken sind eingeteilt in die verschiedenen Phasen der Software Entwicklung, angelehnt an die Phasen aus dem Wasserfall Modell: *Planung*, *Managen*, *Design*, *Kodieren* und *Testen*. \cite{extremeprogramming} Die Praktiken werden hier nicht in der Tiefe aller Details besprochen. Es soll nur ein grober Überblick gegeben werden. Für eine tiefere Einarbeitung sei auf weitere Literatur verwiesen \cite{hanser} \cite{beck} \cite{extremeprogramming}.

## Praktiken der Planung

Für die Phase der Planung sieht Kent Beck \cite{beck} folgende Techniken vor.

### User Stories {#planung-user-stories}

User Stories ist eine Technik für die Anforderungsspezifikation. User Stories stellen ähnlich wie Use Cases die Benutzung des Systems aus der Anwender Sicht dar. Während allerdings Use Cases darauf aus sind, möglichst viele Details zu erfassen, reißt man mit User Stories ein bestimmtes Arbeitspaket nur an. Mithilfe von maximal drei Sätzen wird erklärt, wie eine bestimmte Funktion aus Anwender Sicht funktionieren soll. Dies dient vor allem zur groben Spezifikation der Anforderungen. Mithilfe aller User Stories soll die ganze zu entwickelnde Software beschrieben werden. Gleichzeitig dienen die User Stories auch der Einteilung in Arbeitspakete. Für Iterationen werden bestimmte User Stories ausgewählt, die dann zum nächsten Release fertig gestellt werden müssen. Somit lässt sich der Funktionsumfang des nächsten Releases klar definieren. Alle Details der Anforderungen, die in der User Story nicht verfügbar sind, sollen mit dem Kunden direkt besprochen werden. Dieser ist also die "wandelnde Spezifikation" \cite{beck}. Mithilfe von Unit Tests werden dann die herausgearbeiteten Spezifikationen festgehalten (siehe dazu auch Abschnitt \ref{Testing}).

<!--TODO: Näher auf die User Stories eingehen:
Epping 6.3.1
Agiles PM Überblick Seite 69
-->

### Releases

Releases sind mit dem Auftraggeber, dem Management und dem Entwicklungsteam festgelegte Zeitpunkte, zu denen eine definierte Menge von User Stories fertig gestellt sein soll. Dies wird in XP mithilfe des "Planning-Game" \cite{c2} geplant, in welchem das Entwicklungsteam festlegt, wie viel Zeit es für jede einzelne der User Stories braucht. Die Menge der User Stories soll so gewählt werden, dass 

- ein in sich sinnvoller Funktionsumfang der Software erreicht wird, 
- dieses Release einen möglichst hohen *business value* besitzt und
- riskante Teile der Software möglichst in frühen Releases angegangen werden \cite{c2}.

Es wird empfohlen, Releases in einem zeitlichen Rahmen von 3 Monaten zu planen \cite{beck} (nach \cite{hanser}).

### Iterationen

Wie in jedem modernen Vorgehensmodell wird in XP - angelehnt an das Spiralmodell - mit Iterationen gearbeitet. Es wird empfohlen, Iterationen in der Länge einer Woche anzusetzen\cite{beck} (nach \cite{hanser}). Für eine Iteration nimmt sich das Team eine oder mehrere User Stories aus dem vorhandenen Pool, schreibt die nötigen Tests und verbringt den Rest der Woche dann damit, diese User Stories und die damit verbundenen Funktionen zu implementieren. Die Tests helfen dabei, zu messen, wie weit die gewünschte Funktionalität bereits implementiert wurde und bieten somit dem Entwicklungsteam immer wieder auch die Möglichkeit, sich auf die wesentlichen Anforderungen zu fokussieren. 

Hier wird deutlich, dass innerhalb einer Iteration die verschiedenen Phasen des Wasserfallmodells durchlaufen werden: Es wird mithilfe der User Stories der Verlauf der nächsten Woche geplant (Phase *Planung*), dann wird zusammen mit dem Kunden die konkreten Anforderungen spezifiziert (Phase *Anforderungsspezifikation*). Diese Spezifikation wird in Unit Tests festgehalten (Phase *Test*), um diese im Verlauf der Woche dann zu entwickeln (Phasen *Design* und *Kodieren*). 

Mithilfe der User Stories und deren geschätzten Aufwand, die innerhalb einer Iteration abgearbeitet wurden, kann die **Projektgeschwindigkeit** gemessen werden. Somit lässt sich schnell der aktuelle Stand des Projektes schätzen. Es ist normal, dass diese Geschwindigkeit schwankt. Falls das aber über Iterationen hinweg auftritt, empfiehlt sich ein neues Release Planning \cite{extremeprogramming}. 

## Praktiken des Managens

Die Phase "Managen" findet sich so nicht im Wasserfallmodell wieder. Es handelt sich hierbei auch nicht um eine zusätzliche explizite Phase, sondern eher um Rahmenbedingungen für die gesamte Entwicklungsarbeit. Die Praktiken, die hier beschrieben werden, können nicht einer bestimmten Phase zugeordnet werden. Sie bestimmen die Faktoren, die unabhängig von den Arbeitsphasen gleich bleiben.

### Offene Arbeitsumgebung {#xp-praktiken-arbeitsumgebung}

Kommunikation ist - wie schon weiter oben erwähnt - eins der Kernwerte von XP. Aus diesem Grund soll das Team nicht räumlich getrennt sein, sondern zusammen in einem informativ gestalteten Raum zu arbeiten. Dies bedeutet, dass die Wände des Raums benutzt werden, um User Stories zu befestigen und Arbeitsergebnisse für alle sichtbar visualisiert werden.

Außerdem sollte das Team in einem offenen Raum arbeiten. So ergeben sich viele Möglichkeiten, Probleme auf möglichst schnellem Wege zu klären. Wenn ein Entwickler an einer bestimmten Stelle nicht weiterkommt, kann er direkt einen Kollegen fragen. Dies ist weniger aufwändiger, als z.B. emails zu schreiben oder ständig zwischen Büroräumen hin und her zu wechseln. Außerdem ermöglicht es allen Mitgliedern des Entwicklerteams zu wissen, mit welchen Angelegenheiten sich die Kollegen gerade beschäftigen. Falls es ein Gespräch über ein Thema ist, das man als Entwickler gerade auch bearbeitet, gibt es unkompliziert die Möglichkeit, sich im Gespräch zu beteiligen. Alistair Cockburn nennt diesen Effekt "osmotische Kommunikation" \cite{cockburn} (zitiert nach \cite{krsteski}).


### Stand-Up Meeting {#xp-techniken-stand-up}

Jeder Arbeitstag in XP beginnt mit einem Stand-Up Meeting. In diesem Treffen wird möglichst präzise, klar und schnell kommuniziert, wie der aktuelle Stand des Projekts ist, woran jedes Team arbeitet und was es für Probleme gibt. Zeiteffizienz spielt hier eine große Rolle, da dieses Treffen jeden Tag stattfindet und eine ineffiziente Arbeitsweise bei diesem Treffen langfristig große Folgen für die Zeiteffektivität des Teams hat. Hierbei hilft die Tatsache, dass diese Treffen - wie der Name schon andeutet - *im Stehen* abgehalten werden. Dies hat den psychologischen Effekt, dass man sich nicht lange an einem Diskussionspunkt aufhält.^[Anmerkung des Autors: Man kann bei diesem Treffen also nicht von einer *Sitzung* sprechen, da sich ja keiner *setzt*.]

### Fix XP when it breaks

XP ist sich der Individualität eines Software Projekts bewusst. Man sieht der Tatsache ins Auge, dass kein Software Projekt so ist wie das andere und dass Methoden, die bei einem Projekt gut funktioniert haben, nicht bei allen anderen Projekten genau so gut funktionieren. Dafür sind vierteljährige \cite{hanser} Reflektionssitzungen vorgesehen, in denen die Effektivität der momentanen Praktiken hinterfragt wird. Hier reflektiert das gesamte Team über die momentane Arbeitsweise und überprüft diese auf potenzielle Probleme. Wichtig ist hierbei, dass Probleme nicht nur angesprochen, sondern auch konkrete Entscheidungen getroffen werden, um diese anzugehen. XP geht davon aus, dass diese Anpassungen der Arbeitsweise zu den normalen Aktivitäten der Entwicklungsarbeit gehören und immer wieder durchgeführt werden. Deswegen wird hier bei auch die Formulierung "when" (englisch: temporale Formulierung, zu übersetzen mit "immer dann, wenn...") und nicht die Formulierung "if" (englisch: konditionale Formulierung, zu übersetzen mit "falls") benutzt.

## Praktiken des Designs

In der Design Phase wird die Systemarchitektur der zu entwickelnden Software entworfen. Hierbei ist zu beachten, dass in XP die Design Phase nicht eine Phase mit Anfang und Ende ist, sondern, dass in jeder Iteration (also idealer weise wöchentlich) das Design überdacht und den entsprechenden Anforderungen angepasst wird. Die folgenden Regeln und Praktiken gibt XP hierfür vor:

### CRC Karten {#vorgehensmodelle-xp-crc-karten}

CRC Karten (Class, Responsibilities and Collaboration Cards) sind eine einfache Möglichkeit, im Team schnell und zeiteffektiv Systeme zu entwerfen, zu diskutieren und zu revidieren. Es werden ca. DIN A5 große Karten benutzt, die einen Teil der Software repräsentieren. Dies können konkrete Klassen sein, müssen es aber nicht. Die Karte wird mit einem Namen versehen ("Class") und es kann in maximal 4 Halbsätzen formuliert werden, was die Klasse leisten soll ("Responsibilities"). Zusätzlich kann noch notiert werden, mit welchen anderen Klassen diese Karte in Wechselwirkung steht ("Collaboration").

Der wesentliche Teil der Praktik besteht in der Möglichkeit, sehr schnell und flexibel über den gesamten Aufbau und die Zusammenhänge der einzelnen Klassen zu diskutieren. Hierfür befindet sich das Team an einem Tisch und legt die Karten so auf den Tisch, wie sie sich die Struktur der zu entwickelnden Software vorstellen. Es werden Vor- und Nachteile der Systemarchitektur besprochen und die Karten können immer wieder neu angeordnet werden. Die Möglichkeit, die Karten neu anzuordnen und somit also wirkliche Haptik für die Problemstellung zu entwickeln, verstärkt im Team das Denken in Objektorientierung. Da ein Revidieren oder auch ein neues Anordnen der Karten nur eine Sache von einigen Sekunden ist, kann hier sehr zeiteffizient gearbeitet werden und neue Entwürfe ohne Scheu vor Revision schnell diskutiert werden \cite{hanser} \cite{extremeprogramming}.


### Spike Solutions {#xp-praktiken-spike-solutions}

Spike Solutions werden dann benutzt, wenn das Team sich nicht sicher ist, wie und ob ein Problem genau zu lösen ist und wie viel Aufwand das bedeutet. Spike Solutions sind kleine Prototypen, die "quick and dirty" entwickelt werden, um technologisches Neuland auszuprobieren. Der Code sollte nicht wiederverwendet werden \cite{hanser}. Mithilfe des technologischen "Durchstichs" zu einem bestimmten Problem kann das Team aufgrund der Erfahrungen, die es dabei macht, sehr viel besser abschätzen, was an Aufwand und Komplexität hinter einem Problem steht. Außerdem kann das Team so fremde Technologien - wie z.B. ein neues Framework - ausprobieren, ohne zu viel Zeit durch eine Einarbeit zu verlieren, nur um danach festzustellen, dass das Benutzen des Frameworks nicht hilfreich ist.


## Praktiken des Kodierens

Für die Phase des Kodierens sieht XP folgende Praktiken vor.

### Kunde immer verfügbar

XP sieht vor, dass der Kunde immer für das Team als Ansprechpartner verfügbar ist. Konkret wird empfohlen, dass ein Experte von Kundenseite ständig an der Seite des Teams ist \cite{extremeprogramming}. Dies mag seltsam erscheinen, da der Kunde während der gesamten Projektlaufzeit auf eine wichtige Ressource (einen Experten) im eigenen Betrieb verzichten muss. Dies ist aber für die verschiedenen Aktivitäten und für das agile Vorgehen notwendig. Wie schon im Abschnitt \ref{planung-user-stories} erwähnt, kann nur mithilfe des Experten vor Ort eine detaillierte Anforderungsspezifikation durchgeführt werden. Nur der Hilfe des Kunden ist es beim Release Planning möglich, eine Priorisierung der User Stories nach *business value* vorzunehmen \cite{extremeprogramming}. Und nur mit dem Kunden vor Ort ist es möglich, so schnell wie möglich auf Anforderungsänderungen einzugehen.

Ein weiterer Einwand gegen die Arbeit mit dem Kunden vor Ort ist die daraus resultierende totale Transparenz des Teams und seines Fortschritts gegenüber dem Kunden. Wie auch in Abschnitt \ref{werte-kommunikation} beschrieben, könnte eine Transparenz gegenüber dem Kunden doch zu einem eher unprofessionellen Eindruck führen, denn vor ihm werden alle Probleme, Hindernisse, sowie auch die Schwächen und der Arbeitsablauf des Teams sichtbar. Führt dies nicht zu einem Vertrauensverlust des Kunden gegenüber dem Team? Die Erfahrung \cite{hanser} zeigt hier, dass der Kunde - durch das Einbinden in das Team - eher ein besseres Verständnis für das Projekt, sowie mehr Vertrauen dazu entwickelt.

Die Zeitinvestition, die der Kunde mit der ständigen Anwesenheit eines Experten vor Ort, scheint sehr groß zu sein. Hierbei sei erwähnt, dass für diesen Ansatz allerdings die gesamte Zeit einer ausführlichen Anforderungsanalyse mit dem Kunden gespart werden kann. Zudem kann davon ausgegangen werden, dass durch die Anwesenheit des Experten am Ende die Ergebnisse - wenn überhaupt - nur geringfügig von den Anforderungen des Kunden abweichen, und somit die Zeit der ansonsten notwendigen Korrektur gespart werden kann \cite{extremeprogramming}.

### Pair Programming

Pair Programming ist die Praxis, dass sich zwei Entwickler zusammen mit einer Aufgabe beschäftigen. Sie sitzen dabei zusammen an einem Rechner, ein Entwickler benutzt die Tastatur und der andere sitzt daneben. Die Rollen des Schreibens und des Beobachtens werden regelmäßig zwischen den beiden Entwicklern getauscht.

Die Idee des Pair Programmings ist auf der Idee der gedanklichen Arbeitsteilung begründet: Während der Entwickler an der Tastatur das Problem auf taktischer Ebene angeht, macht sich sein beobachtender Kollege über die strategischen Dimensionen des Problems Gedanken.

Pair Programming hat verschiedene Vorteile. Es bietet die Möglichkeit, Wissensinseln zu vermeiden, indem mindestens zwei Entwickler über das Wissen der Codebasis für die zu entwickelnde Funktionalität verfügen \cite{wolf}. Wenn beide Entwickler ungefähr gleich viel Erfahrung haben, können sie sich gegenseitig gut unterstützen. Wenn ein Entwickler des Paars deutlich erfahrener als der andere ist, kann der Unerfahrene durch die Zusammenarbeit viel von dem Erfahrenen lernen. Hier gilt wieder der Wert der Kommunikation (siehe Abschnitt \ref{werte-kommunikation}), ein Reden über den Code von Angesicht zu Angesicht - während man am Code Änderungen vornimmt - erweist sich als gute Grundlage, Wissenslücken zu füllen \cite{agilespmkanban}.


## Praktiken des Testens {#Testing}

Die Phase des Testens - die im Wasserfallmodell (siehe Abschnitt \ref{wasserfallmodell}) eine explizite Phase war - ist in XP in der Entwicklung der Software integriert. Die folgenden Praktiken und Regeln sieht XP für das Testen vor.

### Unit Tests für den gesamten Code

Unit Tests, also Tests, die nah an der Funktionalität einzelner Codeabschnitte liegen, bilden in XP die Grundlage für ein zeiteffizientes Entwickeln. Wells \cite{extremeprogramming} widerspricht der Annahme, dass das Entwickeln von Tests zu viel Zeit in Anspruch nehmen würde. Das Entwickeln des Tests nimmt als solches kaum Zeit in Anspruch, wenn man es in der Kombination mit der Entwicklung der gewünschten Funktionalität sieht. 


# Kanban {#vorgehensmodelle-kanban}

Das nächste zu betrachtende Vorgehensmodell ist Kanban. Kanban hat im Vergleich zu den beiden anderen in dieser Arbeit vorgestellten Vorgehensmodelle XP und Scrum die Besonderheit, dass es nicht für die Softwareentwicklung entworfen wurde. Ursprünglich wurde Kanban von Toyota entwickelt und diente zum Managen und Optimieren Prozessen in der Automobilherstellung. Die Tatsache, dass das Vorgehensmodell - wenn auch mit Änderungen - aus der Domäne *Automobilindustrie* in die Domäne *Softwareentwicklung* übertragen werden konnte, diente auch zum Teil als Motivation für diese Arbeit. Da Kanban nun bereits schon einmal erfolgreich in eine andere Domäne adaptiert werden konnte, gibt es also Grund genug, es als Vorgehensmodell hier genauer zu betrachten.

## Was ist Kanban?

Das Wort "Kanban" kommt aus dem japanischen: *Kan* bedeutet soviel wie *Signal* und *Ban* kann man mit *Karte* übersetzen \cite{epping}. Damit ist auch schon die ursprüngliche Idee der Technik von Kanban grob beschrieben: Mithilfe von Signalkarten zu kommunizieren, wie der Status gewisser Produktionsabläufe ist. Der Begriff *Kanban* kann an sich kann vieles bedeuten, deswegen soll im Folgenden die folgende Unterscheidung vorgenommen werden:

- *Kanban* als Vorgehensmodell
	- **Produktions-Kanban** meint das ursprüngliche Vorgehensmodell, wie es in der Produktion verwendet wird
	- **Software-Kanban** meint das Vorgehensmodell, wie es David J. Anderson in \cite{anderson} beschrieben hat.
- *Kanban* als Technik
	- Das **Kanban-Board** meint die Technik, ein Board mit Karten und Listen zu verwenden, um den IST-Zustand eines Systems zu veranschaulichen \ref{kanban-technik-board}

Diese Begriffe sollen im weiteren Verlauf dieser Arbeit dazu dienen, die einzelnen Bedeutungen von Kanban zu unterscheiden. Falls der Begriff *Kanban* ohne Zusatz erscheint, ist damit das *Software-Kanban*, also das Vorgehensmodell gemeint.

Die Idee von Software-Kanban ist, mithilfe einfacher Mittel Transparenz über den aktuellen Entwicklungsstatus eines Projekts zu bekommen, und zu kommunizieren, welche Probleme gerade akut sind. Software-Kanban nutzt hierfür primär die Technik des Kanban-Boards. Das dahinter liegende Wertesystem und die daraus resultierenden Prinzipien gehen aber weit über die Technik an sich hinaus und sollen im weiteren näher betrachtet werden.

Das Ziel von Software-Kanban ist nicht, Probleme zu lösen, sondern sie nur aufzuzeigen. Es gibt den Mitgliedern des Entwicklungsteams die nötigen Werkzeuge und Techniken an die Hand, Probleme und Schwachstellen in der Zusammenarbeit des Teams zu sehen. Wie sie dann damit umgehen, bleibt in ihrer Hand \cite{extremeprogramming}.

## Was ist Kanban nicht?

Software-Kanban ist keine Entwicklungsmethode. Es gibt keine Aussagen darüber, *wie* entwickelt werden soll. Es bezieht auch keine Stellung dazu, wie ein Entwicklungsprojekt geplant oder organisiert werden soll. Das bedeutet, Software-Kanban kann sowohl in Projekten angewandt werden, die noch nach dem klassischen Wasserfallmodell arbeiten, als auch in modernen Projekten mit iterativ-inkrementellem Ansatz.

Software-Kanban steht somit auch in keinerlei Konkurrenz zu den Vorgehensmodellen wie XP oder Scrum \cite{agilespmkanban}. Die Idee von Software-Kanban ist nicht, ein neues Vorgehen einzuführen. Es setzt auf die vorhanden Strukturen auf und arbeitet mit kleinen Schritten der Verbesserung.


## Historie

### Produktions-Kanban

Der ursprüngliche Gedanke von Software-Kanban kommt aus der Automobilindustrie. (Das Kanban Vorgehensmodell der Automobilindustrie wird im Folgenden Produktions-Kanban genannt, um eine Differenzierung mit dem Software-Kanban zu ermöglichen)

Der japanische Automobilhersteller Toyota entwickelte Produktions-Kanban, um eine Just-In-Time Produktion zu gewährleisten: Es sollte eine unnötige Überproduktion einzelner Teile in einer Produktionslinie vermieden werden, so konnte der Verschwendung von Lagerplatz vorgebeugt werden. Andererseits musste sichergestellt werden, dass das aber auch zu keinem Mangel an Produktionsgütern führte. So entwickelte Toyota ein System, um die einzelnen Produktionsschritte miteinander zu synchronisieren: Es wurden Karten eingesetzt, um signalisieren, dass sich Bestände eines bestimmten Zwischenerzeugnisses dem Ende neigten. Die Nachproduktion wurde mithilfe dieser Karten initiiert. Somit konnte die Menge der zwischengelagerten Teile einer Produktion auf ein Minimum gebracht werden: Zwischenteile wurden erst genau dann produziert, wenn sie auch benötigt wurden.


### Transfer in die Software Welt

Das historische Produktions-Kanban lässt sich nicht eins zu eins in der Software Welt übernehmen, da es in der Software Entwicklung nicht um Fließbandproduktion geht, in der immer wieder das gleiche geschieht. Software Entwicklung erfordert eine hohes Maß an Kreativität, und ist mit vielen Ungewissheiten und Variabilität verbunden. Allerdings lassen sich die Werte und Prinzipien sehr gut übernehmen. 

Somit entstand das Software Kanban, auf das im Folgenden näher eingegangen wird. Wichtig ist zu erwähnen, dass Software-Kanban und Produktions-Kanban nicht dasselbe ist. Sie basieren allerdings auf den gleichen Werten und den gleichen Prinzipien.


## Werte von Kanban

Die Werte von Kanban unterscheiden sich von den anderen beiden in dieser Arbeit vorgestellten Vorgehensmodelle. Das liegt daran, dass Kanban sich nicht nur dem Werte System der *Agilen Softwareentwicklung* verschreibt, sondern auch dem der *Schlanken Softwareentwicklung*. Zusammenfassend können die drei Hauptwerte mit den Worten von David J. Anderson beschrieben werden:

> "Value first, then flow, then waste reduction/elimination." \cite{anderson} (zitiert nach \cite{epping})

Die Werte haben dabei folgende Bedeutung (Erläuterungen nach \cite{epping}):

- **Value** beschreibt den Geschäftswert aus der Sicht des Kunden. Dies ist der zentrale Wert von Kanban. Jede Arbeit, die getan wird, muss dem Kunden einen Geschäftswert bringen.
- **Flow** beschreibt den gleichmäßigen Arbeitsfortschritt. Dieser ist wichtig, muss aber dem Geschäftswert untergeordnet sein. In Kanban wird aber davon ausgegangen, dass ein gleichmäßiger Arbeitsfortschritt dem Geschäftswert zugute kommt.
- **Waste** stellt den Ballast dar, der den gleichmäßigen Arbeitsfortschritt behindert. Für die verschiedene Typen von Ballast, siehe \ref{eliminate-waste}.


### Schlanke Softwareentwicklung

Epping \cite{epping} stellt mit Bezugname zu Poppendieck \cite{poppendieck2003lean} eine Reihe von Werten vor, die das Wertesystem der schlanken Softwareentwicklung repräsentieren. Auf einige dieser Werte soll im Folgenden näher eingegangen werden.


#### Eliminate Waste {#eliminate-waste}

Das Eliminieren von Ballast nimmt in der schlanken Softwareentwicklung eine zentrale Rolle ein^[Deswegen auch der Begriff "schlank": Etwas, das von unnötigen Ballast befreit ist, ist schlank. Ein Mensch, der nach einer Diät abgenommen hat und somit sein Körpergewicht reduziert hat, ist "schlank"; er hat seinen Körper von unnötigen Ballast (in diesem Fall unnötige Fettreserven) befreit]. 

Mary und Tom Poppendieck beschreiben *Ballast* wie folgt:

> "Waste is anything that does not add value to a product, value as perceived by the customer." \cite{poppendieck2003lean} (zitiert nach \cite{epping})

Ballast beschreibt also alles das, was keinen Wert für den Kunden darstellt. \cite{epping} und \cite{poppendieck2003lean} beschreiben sieben Kategorien von Ballast:

- **Teilweise getane Arbeit** hat für den Kunden noch kein Wert. In der Softwareentwicklung tendiert nicht fertig entwickelte Funktionalität außerdem dazu, mit der Zeit obsolet zu werden. Angefangene und nicht zu Ende geführte Aufgaben sind somit Ballast: Es ist Arbeit, die dem Kunden kein Wert bietet.
- **Überflüssige Arbeit** Viele Vorgehensmodelle in der Softwareentwicklung sind stark dokumentenlastig (siehe Abschnitt \ref{schwergewichtige-vorgehensmodelle}). Dokumentation ist aber häufig unnötige, zusätzliche Arbeit, von der eigentlich keiner profitiert, weil sie wahrscheinlich von niemanden wirklich gelesen wird. Zu dokumentenlastiges Vorgehen ist also ein Beispiel für überflüssige Arbeit, die keinen Wert für den Kunden schafft.
- **Überflüssige Funktionen** sind Ballast, da jede Zeile Code in der Software Entwicklung mit einem Aufwand von Wartung verbunden ist. Funktionen, die nicht benötigt werden, sollten also nicht im System auftauchen, da sie unnötig Aufmerksamkeit, Arbeit und Zeit für sich beanspruchen.
- **Aufgabenwechsel** benötigen kognitive Ressourcen, um sich gedanklich auf den Kontext der neuen Aufgabe einzustimmen. Häufige Aufgabenwechsel führen also dazu, dass Mitarbeiter mit der gleichen Leistung weniger Ergebnisse mit Wert erzielen. 
- **Wartezeiten** sind Ballast, da der Kunde mit jeder Verzögerung auf die Umsetzung seiner Anforderung warten muss. Wenn er auf Anforderungen hin allerdings schnell Ergebnisse sieht, sieht er schnell - das heißt ohne große Investition der Ressource *Zeit* - den Wert. Somit ist alles, was an unnötiger Wartezeit zwischen *Eingang einer Anforderung* und *Lieferung der Funktion* liegt, Ballast.
- **Bewegung** beschreibt unnötige Änderungen im Arbeitssystem. Damit ist zum Beispiel die Bewegung eines Mitarbeiters zwischen mehreren Aufgaben (siehe auch *Aufgabenwechsel*) oder auch die Bewegung wichtiger Artefakte gemeint, wodurch ein Zugriff von Mitarbeitern auf das Artefakt erschwert wird. Außerdem wird der Aufwand, den ein Teammitglied für das Beschaffen von nötigen Informationen braucht, auch als Bewegung gedeutet.
- **Korrekturen und Fehler** sind unnötige Arbeit: wenn Funktionen gleich *richtig* entwickelt werden, muss nicht doppelt daran gearbeitet werden. Aber nicht nur die Arbeit an sich ist Ballast, sondern auch die Zeit, in der ein Fehler unentdeckt bleibt: je länger ein Fehler unentdeckt ist, desto mehr Zeit und Arbeit ist nötig, ihn zu finden: ein großer Systemfehler, der innerhalb weniger Minuten entdeckt wird, stellt weniger Ballast dar, als ein unscheinbarer Fehler, der monatelang unentdeckt im System verweilt.

#### Amplify Learning

Lernen und Verbessern ist in Kanban ein zentrales Thema. Es wird davon ausgegangen, das nichts perfekt ist, weder das Vorgehen, noch die Menschen. Alles kann sich also immer noch verbessern. Teammitgliedern sollte die Möglichkeit geboten werden, aus Fehlern zu lernen. Dafür ist es notwendig, dass eine Arbeitsatmosphäre existiert, die es den beteiligten Mitarbeitern ermöglicht, Fehler zuzugeben. Nur wenn mit der Tatsache gerechnet wird, dass Menschen Fehler machen, und man mit dieser Tatsache ehrlich umgehen kann, gibt dies den Menschen die Möglichkeit, aus diesen Fehlern zu lernen. Fehler sind zwar unvermeidbar, aber sie sind reduzierbar. Durch einen ehrlichen Umgang mit Fehlern steigt die Wahrscheinlichkeit, dass wiederholende Fehler vermieden werden können.

Es geht beim Lernen aber nicht nur um Fehler, sondern auch um neue Fachgebiete. Jedem Mitarbeiter sollte die Möglichkeit gegeben werden, neue Fachgebiete zu erlernen. Dies braucht einerseits die nötigen Ressourcen für die Mitarbeiter (Zeit, Material), andererseits aber auch eine gewisse Atmosphäre des Lernens. Wichtiger Motivationsfaktor für Lernen ist Neugier. Neugier kann nur dann entstehen, wenn Wissen nicht für selbstverständlich gehalten wird. Die Freiheit, Unwissen zugeben zu können, ohne negative Konsequenzen befürchten zu müssen, bevollmächtigt jeden Mitarbeiter dazu, neue Wissens- und Fachgebiete zu entdecken, die für seine Arbeit relevant sein können.

#### Decide as Late as Possible

Je später ein Entscheidung getroffen wird, desto mehr Information ist vorhanden. Je mehr Information vorhanden ist, desto weniger muss auf Spekulation gebaut werden. Je weniger auf Spekulation gebaut wird, desto weniger Fehlentscheidungen gibt es. Je weniger Fehlentscheidungen es gibt, desto weniger unnötige Arbeit muss vom Team getan werden. 

Ein spätes Entscheiden führt also zu einem effektiveren und ballastfreieren Arbeiten des Teams. Außerdem erledigen sich manchmal Probleme von selbst. Mit der Zeit ändern sich Umstände, oder neues Wissen lässt eine Entscheidung aus einer anderen Perspektive zu.

Dies ist kein Appell, sich nicht zu Entscheiden. Entscheidungen sind wichtig. Allerdings sollen frühzeitige Entscheidungen vermieden werden.

#### Deliver as Fast as Possible

Wenn die Zeit zwischen Eingang einer Aufgabe und deren Erledigung gering ist, ist es möglich, sehr schnell für seine getane Arbeit Feedback vom Kunden zu bekommen. Zusätzlich ist es den Stakeholdern - die die Anforderungen bestimmen - möglich, schnell eine Reaktion auf ihre Anforderung zu sehen. Ein Entwicklungsprozess besteht immer aus der iterativen Bewegung von *Entwicklung*, *Feedback*, *Verbesserung*. Je kürzer die Zeit, die für die Entwicklung gebraucht wird, desto mehr kann gelernt werden, und desto eher kann mithilfe des Feedbacks genau das entwickelt werden, was benötigt wird.

Durch den Fokus darauf, genau eine Aufgabe so schnell wie möglich zu erledigen, wird parallele Arbeit vermieden (somit also auch der Ballast *Aufgabenwechsel*). Insgesamt ist dadurch ein effizienteres Arbeiten möglich.

#### Empower the Team

Das Team braucht die Möglichkeit, selbst entscheiden zu können. Niemand versteht die Details der Arbeit an dem System so gut, wie diejenigen, die die Arbeit tun. So sollten alle wichtigen Entscheidungen, was die technischen Details und deren Umsetzung angeht, auch von ihnen kommen. Das ermöglicht außerdem, möglichst spät zu entscheiden: erst wenn bei dem Team eine Aufgabe ansteht, entscheidet es, wie vorgegangen werden soll. Wenn es beispielsweise einen Chefarchitekten gibt, der vorher Entscheidungen über bestimmte Aspekte des Systems trifft, hat dies mehrere Nachteile: einerseits wird die Entscheidung früher getroffen als notwendig (siehe *Decide as Late as Possible*), andererseits wird sie von jemanden getroffen, der nicht über das Wissen des Teams verfügt. Dies sind zwei Faktoren, die die Wahrscheinlichkeit von Fehlentscheidungen erhöhen.


## Prinzipien von Kanban

Auf den Werten der schlanken Softwareentwicklung basieren die Prinzipien^[Epping \cite{epping} nennt die Prinzipien "Elemente". Der Autor bevorzugt aber den Begriff "Prinzip": Das Prinzip als eine "feste Regel, die jemand zur Richtschnur seines Handelns macht" \cite{duden2015prinzip} steht in dem Level der Abstraktion zwischen dem abstrakten Wert und der konkreten Technik. Das Wort "Element" ist dem Autor hier zu mehrdeutig.] von Kanban. Viele dieser Prinzipien werden von der Technik des Kanban Boards (siehe Abschnitt \ref{kanban-technik-board}) umgesetzt, sind aber nicht daran gebunden. Die Prinzipien sollen im Folgenden vorgestellt werden. Dabei wurden als Quellen vorwiegend \cite{epping} und \cite{agilespmkanban} benutzt.


### Systemisches Denken

Kanban motiviert dazu, dass Optimierungen an dem Vorgehen auf Basis einer ganzheitlichen Systemsicht durchgeführt werden. Das Problem bei lokalen Optimierungen eines Systems ist oft, dass dadurch die gesamte Leistung eines Systems leidet. Ein Beispiel für die negativen Seiten einer lokalen Optimierung ist, 

> "wenn die Entwicklungsabteilung ihre lokale Durchlaufzeit dadurch verbessert, dass sie Code in schlechterer Qualität abliefert. Dies verschlechtert mittelfristig die Leistung des Gesamtsystems, weil immer mehr Nacharbeiten notwendig sind." \cite{agilespmkanban}

Wenn hingegen die Teammitglieder dazu motiviert werden, nicht nur ihre eigene Arbeit zu sehen, sondern das ganze System und Optimierungen auf Basis dieser Sicht gemacht werden, kann die Durchlaufzeit des Gesamtsystems wirklich verbessert werden. Eine solche Sicht hilft auch, Fronten zwischen den Mitarbeitern einzelner Prozessschritte aufzulösen, sich als ein Team zu sehen und zu einer besseren Zusammenarbeit zu finden.

Das Kanban Board als Technik (siehe Abschnitt \ref{kanban-technik-board}) hilft, dieses Prinzip umzusetzen, indem es dem gesamten Team Transparenz über den gesamten Prozess mit all seinen Schritten verschafft. So kann jedes Teammitglied sehen, wie sich seine Arbeit in dem Gesamtsystem des Prozesses auswirkt.

Die entscheidende Größe ist hierbei immer der Durchsatz, also die Menge an Aufgaben die in einer bestimmten Zeit erledigt werden. Dieses Messkriterium gilt es in Hinblick auf das Gesamtsystem zu optimieren. Dies kann durchaus dazu führen, dass es lokal zu mehr Aufwand führt. Um das Beispiel von oben noch einmal aufzugreifen: Eine qualitative Entwicklung nimmt mehr Zeit für die Entwicklung ein, dafür ist das Testing und das Ausliefern schneller. Qualität kann, obwohl die Entwicklung im lokalen Kontext länger dauert, im ganzen System dafür sorgen, dass der Durchsatz erhöht wird \cite{agilespmkanban}.

### WIP Limit

WIP steht für Work in Progress. Durch die Limitierung des WIP wird dafür gesorgt, dass parallele Arbeit vermieden wird. Wenn in dem Gesamtsystem des Arbeitsprozesses nur eine bestimmte Anzahl von Aufgaben vorhanden sein darf, wird dafür gesorgt, dass diese Aufgaben sehr schnell erledigt werden. Dies hilft auch, Überlastung oder Engpässe zu vermeiden. Außerdem werden Probleme sehr schnell sichtbar: Wenn die Arbeit an einer Stelle in der Produktionskette ins Stocken gerät, weil es ein Problem gibt (beispielsweise kann das Testing einer Funktion nicht durchgeführt werden), können andere Teammitglieder aufgrund des WIP Limits keine anderen Aufgaben erledigen. Dies erscheint zuerst kontraproduktiv. Man überlege sich aber, dass dadurch Ressourcen frei werden, um das Problem in der Produktionskette zu lösen (beispielsweise ist das Entwicklerteam nun frei, um das Testing Team zu unterstützen). Dies hilft schlussendlich, die Durchlaufzeit möglichst gering zu halten. 


### Pull Prinzip

Das Pull Prinzip steht dem klassischen Push Vorgehen entgegen. Im Push Vorgehen werden Aufgaben den Teammitglieder durch einen Vorgesetzten zugewiesen. Bei dem Pull Prinzip entscheiden die Teammitglieder selbst, welche Aufgabe sie erledigen. Die Aufgaben werden "gezogen". Dies verhindert eine Überlastung der einzelnen Teammitglieder. Jedes Teammitglied "zieht" sich genau dann eine neue Aufgabe, wenn es ausreichend Kapazität dafür hat. Das sorgt dafür, dass das Team selbstorganisiert handeln kann und es vermeidet unnötiges Multitasking und den damit verbundenen Ballast von Aufgabenwechsel. Teammitglieder "ziehen" sich erst dann eine neue Aufgabe, wenn sie mit der vorherigen fertig sind.

Führungskräfte eines Teams bekommen im Zuge des Pull Prinzips eine neue Rolle: sie bestimmen nicht mehr darüber, welches Teammitglied welche Aufgabe zu erledigen hat, sondern kümmern sich darum, dass die Rahmenbedingungen des Teams stimmen, sodass das Team eine gute Leistung bringen kann, ohne von unnötigem Ballast aufgehalten zu werden.

Insgesamt fordert das Pull Prinzip Vertrauen von den Führungskräfte in ihre Teammitglieder. Sie müssen darauf vertrauen können, dass die Teammitglieder wirklich an den Aufgaben arbeiten und nicht ihre Zeit mit sinnlosen Beschäftigungen verschwenden.


### Kontinuierliche Verbesserungen {#kanban-prinzip-kontinuierliche-verbesserungen}

Das Prinzip der Kontinuierlichen Verbesserung wird auch "Kaizen" genannt. Vorgehensmodelle wie Scrum verfolgen einen revolutionären Ansatz: Das bisherige Vorgehen wird nicht mehr beachtet, ein vollständiges neues Vorgehen wird übernommen. Aber große Veränderungen treffen bei Menschen nicht immer auf Akzeptanz. Kanban geht hier einen anderen Weg: Es arbeitet genau mir dem Vorgehen, was bereits vorhanden ist. Kanban geht davon aus, dass das bereits vorhandene Vorgehen nicht ohne Grund genau so ist: Viele Menschen werden sich bereits Gedanken gemacht haben, viel Zeit, Wissen und Arbeit ist evtl. schon in die Optimierung bestimmter Abläufe investiert worden. Kanban baut genau auf die vorhandene Situation auf. Es kann also sowohl für klassische wasserfalmmodellartige Vorgehen, als auch für moderne iterative Ansätze benutzt werden. Kanban lässt sich auf jedes Vorgehen adaptieren und hilft dabei, den vorhandenen Prozess besser zu verstehen und Probleme zu erkennen.

Kanban geht also den Weg der kleinen Veränderungen. Mithilfe der Mittel von Kanban, lassen sich Probleme erkennen und Messungen durchführen. Wichtigstes Maß in Kanban ist die Durchlaufzeit einer Arbeitsaufgabe \cite{agilespmkanban}. Mithilfe von kleinen Anpassungen am Prozess kann nun festgestellt werden, wie die Durchlaufzeit optimiert werden kann. Wichtig ist hierbei, nur eine Veränderung auf einmal durchzuführen, damit sich einzelne Veränderungen in ihrer Wirkung nicht gegenseitig aufheben. Die Veränderung eines WIP Limits an einer bestimmten Stelle des Prozesses kann hier als Beispiel genannt werden. So wird mit kleinen Schritten ein Optimum gesucht, damit eine nachhaltige Entwicklungsgeschwindigkeit garantiert werden kann.

Der Weg der kleinen Veränderungen verlangt viel Geduld: Um nachweislich effizienter Arbeiten zu können, benötigt es immer wieder Zeit, die vorgeschlagenen Veränderungen auf ihre Effektivität hin zu überprüfen. 


## Techniken von Kanban

Kanban selbst schreibt nicht viele Techniken vor. Teams, die Kanban benutzen, bedienen sich häufig der agilen Praktiken von XP (siehe Abschnitt \ref{xp-praktiken}). \cite{epping} schlägt einige Techniken zur Benutzung mit Kanban vor und führt auf, inwiefern diese die Prinzipien von Kanban umsetzen. Viele dieser Techniken sind allerdings deckungsgleich mit Praktiken aus XP oder sind für den weiteren Verlauf dieser Arbeit nicht relevant.

Aus diesem Grund wird im Folgenden nur auf die zentrale Technik von Kanban eingegangen: Das Kanban-Board. Mithilfe dieses Boards können auch alle relevanten Messungen durchgeführt, die eine Verbesserung des Prozesses möglich machen.

### Kanban-Board {#kanban-technik-board}

Das Kanban-Board visualisiert den Ist-Zustand und hilft, einen schnellen Überblick über den momentanen Status des Projekts mit all seinen Aufgaben zu bekommen. Es besteht aus Listen (oder auch "Spalten" genannt), die horizontal nebeneinander angeordnet sind. Die Listen repräsentieren die einzelnen Stationen, die ein Arbeitspaket des Teams durchläuft, wenn es bearbeitet wird. Im Rahmen von Softwareentwicklung können dies z. B. die Listen

- Backlog
- ToDo
- Analyse
- Entwicklung
- Test
- Done

sein \cite{video2brainkanban}. Die Listen werden der Reihenfolge nach von Links nach Rechts auf dem Board notiert.

Die einzelnen Arbeitsaufgaben werden durch Karten repräsentiert, die den einzelnen Listen zugeordnet werden. Je nach Status der Aufgabe wandern die Karten auf dem Board in den Listen von Links nach Rechts. Ein solches Kanban Board zeigt die Abbildung \ref{Exemplarisches schematisches Kanban Board} (Quelle: \cite{leankit2015kanbanboard}).

![Exemplarisches schematisches Kanban Board](http://download.heart-co.de/simple-physical-board-w-card-types-e87dbe30.png)

Mithilfe des Kanban Boards lassen sich viele der Prinzipien von Kanban umsetzen: 

- Das Prinzip des WIP Limits wird umgesetzt, indem die einzelnen Spalten eine limitierte Anzahl an Karten beinhalten dürfen. Dabei wird für jede Spalte festgelegt, wie viele Karten sie maximal enthalten darf. 
- Das Pull Prinzip wird realisiert, indem jeder Mitarbeiter sich selbst seine Karten "zieht": sobald er mit seiner Aufgabe fertig ist, kann er dies auf dem Board kenntlich machen. Außerdem kann er zugleich sehen, welche Aufgaben für ihn noch zur Bearbeitung zur Verfügung stehen. Somit müssen dem Mitarbeiter Aufgaben nicht zugewiesen werden, sondern er kann selbst entscheiden, welche Aufgabe als nächstes ansteht.
- Außerdem unterstützt das Kanban Board das systemische Denken, indem es jedem Mitarbeiter den ganzen Prozess des Vorgehens visualisiert. Wenn Diskussionen für Optimierungen auf Basis dieser Visualisierung durchgeführt werden, ist für jeden Beteiligten sichtbar, was diese Optimierungen im gesamten Prozess bewirken. Somit werden lokale Optimierungen, die im Gesamtprozess kontraproduktiv sind, vermieden.


### Messungen

Messungen bilden die Grundlage für die kontinuierliche Verbesserung in Kanban. Durch kleine Schritte der Verbesserung und ständigem Feedback durch die Messungen kann festgestellt werden, welche Faktoren für ein gutes Arbeitsergebnis und eine gute Leistung des Teams sorgen. Wichtigstes Maß dabei ist die Durchlaufzeit einer Arbeitsaufgabe. Diese soll verringert werden.

Viele, wenn nicht sogar alle Probleme eines Prozesses wirken sich auf die Durchlaufzeit aus. Wenn also daran gearbeitet wird, diese zu verkürzen, werden auch Probleme angegangen werden, die nicht viel mit der Durchlaufzeit zu tun haben scheinen (z. B. schlechte Qualität oder mangelhafte interne Abstimmung) \cite{agilespmkanban}, da sich früher oder später herausstellt, das sich auch diese Probleme negativ auf die Durchlaufzeit auswirken.

Um die Motivation des Teams zu steigern, sich auf die Optimierung des Gesamtsystems zu konzentrieren, ist es empfehlenswert, jedem die Ergebnisse der Messungen zugänglich zu machen \cite{agilespmkanban}. Häufig werden diese zusätzlich mit auf das Kanban Board angebracht \cite{epping}. 




# Scrum {#problemfeld-scrum}

Scrum wurde von Ken Schwaber und Jeff Sutherland in den 90er Jahren entwickelt und zählt mittlerweile zu den "etabliertesten agilen Managamentmethoden" \cite{wirdemann2014scrum}. Scrum ist eine Projekt*management*methode. Das zentrale Thema ist der Ablauf des Projekts, nicht die konkreten Techniken, die benutzt werden. Dies macht einen Transfer der Methode auf andere Domänen einfach.

Ken Schwaber und Jeff Sutherland beschreiben in dem Scrum Guide \cite{scrumguide} die wesentlichen Merkmale von Scrum. Sie definieren dabei die Projektrollen, den Prozessablauf, die Aktivitäten und die Artefakte, die Scrum ausmachen. Im Folgenden soll auf diese Beschreibung aufgebaut werden. Dabei wurde auch auf Erläuterungen von \cite{hanser} und \cite{wirdemann2014scrum} zurückgegriffen.


## Projektrollen {#scrum-projektrollen}

Scrum definiert drei verschiedene Rollen: den *Product Owner*, das *Team* und den *Scrum Master*. Diese Rollen definieren verschiedene Verantwortlichkeiten, die der Inhaber der Rolle zu übernehmen hat.

### Product Owner

Der Product Owner repräsentiert die Sichtweise des Kunden. Im besten Fall ist es der Kunde selbst, wenn nicht, so sollte es zumindest jemand sein, der in direktem und häufigen Kontakt mit dem Kunden steht. Der Product Owner hat die Verantwortung, das Product Backlog (siehe Abschnitt \ref{problemfeld-scrum-artefakte-product-backlog}) zu pflegen und Backlog Items zu priorisieren. Somit übernimmt er die Verantwortung, was wann vom Team entwickelt werden soll. Der Product Owner hat keinen Einfluss darauf, wie sich das Team innerhalb eines Sprints organisiert, oder wie die Aufgaben während eines Sprints abgearbeitet werden. Dies entscheidet allein das Team. Der Product Owner ist nur dafür verantwortlich, zu entscheiden, *was* innerhalb des Sprints bearbeitet wird.

Der Product Owner ist das Bindeglied zwischen Team und Stakeholder: Alle Fragen, die das Team an die Stakeholder hat, stellt es dem Product Owner. Der weiß entweder selbst die Antwort oder kümmert sich um schnellstmögliche Antworten, indem er sich mit den Stakeholdern in Verbindung setzt. Und auch für neue Anforderungen oder Änderungswünsche, die die Stakeholder an das Team hat, ist der Product Owner der Ansprechpartner. Somit sorgt der Product Owner für die Kommunikation zwischen Team und Stakeholder.

### Team

Das Team ist selbstorganisiert und klein: es gibt keinen Teamleiter und alle Mitglieder sind Vollzeitmitglieder in dem Projekt. Es gibt keine Teilzeit Mitglieder, die noch in anderen Projekten arbeiten. Dies sorgt dafür, dass zu jederzeit das vollständige Team verfügbar ist, dass sich das Team als eine Einheit sieht und gemeinsam Verantwortung für das Projekt übernehmen kann. 

Das Team arbeitet in einem gemeinsamen Büro: Es gibt keine Abteilungen oder sontige räumliche Trennungen zwischen den Teammitgliedern. Dies sorgt für eine osmotische Kommunikation (siehe Abschnitt \ref{xp-praktiken-arbeitsumgebung}).

Das Team ist Multidisziplinär und Autonom. Alle benötigten Fähigkeiten für das Projekt sind im Team vorhanden, sodass das Team während des Sprints nicht auf fachliche Hilfe von außen angewiesen ist. Dies sorgt für eine möglichst schnelle Bearbeitung der Aufgaben. Es muss auf keine Arbeit von außen gewartet werden, was zu unnötigen und unvorhergesehenen Verzögerungen des Sprintfortschritts führen könnte. Obwohl jedes Teammitglied seine Spezialisierung hat, wird im Team nicht in Abteilungen gedacht: Alle Teammitglieder sind gleichberechtigt, Entscheidungen zu treffen.


### Scrum Master {#vorgehensmodelle-scrum-master}

Der Scrum Master ist verantwortlich dafür, dass der Prozess von Scrum und seine Regeln eingehalten werden. Er ist der "Freund" oder "Coach" des Teams. Sein Ziel ist es, dass das Team in Ruhe arbeiten kann,  und er schützt das Team vor Einflüssen vom Product Owner oder anderen Stakeholdern während eines Sprints.

Der Scrum Master unterstützt außerdem den Product Owner in der Kommunikation mit dem Team. Er hilft sowohl dem Team als auch dem Product Owner die Prinzipien von Scrum zu verstehen.

Gibt es Hindernisse, die ein effizientes Arbeiten des Teams gefährden, so kümmert sich der Scrum Master um die Beseitigung dieser. Dies können nicht nur falsche Einflüsse von Stakeholdern und dem Product Owner sein, sondern auch falsch verstandene Teamrollen, ein ungeeigneter Product Owner, oder ganz praktische Probleme, wie ein defekter Rechner eines Teammitglieds. Für die Beseitigung vieler solcher Hindernisse ist ein gewisses Feingefühl des Scrum Masters gefragt. Er muss sich auf teampsychologische Aspekte einlassen und das Team in einem kollegialen Führungsstil in die Richtlinien von Scrum leiten.


## Der Prozess

Der Prozess wird in Abbildung \ref{Schematische Darstellung des Scrum Prozesses} dargestellt. (Grafik aus \cite{hanser})

![Schematische Darstellung des Scrum Prozesses](http://download.heart-co.de/Bildschirmfoto%202015-06-22%20um%2012.06.07.png)

Zu Beginn des Prozesses erstellt der Product Owner eine Vision des Projekts: er beschreibt das Projekt kurz, schätzt grob den gesamten Aufwand ab und legt außerdem mögliche Meilensteine fest. Dies ist keine detaillierte Aufwandschätzung oder ähnliches, nur ein grobes Umreißen des Projekts und seinem groben Ziel. Hilfreich ist auch, das Ziel des Projekts in einem Satz zusammen zu fassen, zum Beispiel:

> "Wir wollen das einzige Job-Portal für High Professionals in Deutschland bauen." \cite{wirdemann2014scrum}

Auf Basis der Vision erstellt der Product Owner das Product Backlog und seine ersten Einträge. Diese Einträge werden dann vom Team in Sprints abgearbeitet. 


### Sprint

Der Sprint ist das Herzstück von Scrum. Ein Sprint ist ein Iterationsdurchlauf in der Entwicklung und als Ergebnis des Sprints steht immer ein Stück lauffähige Software. Die Länge des Sprints ist maximal 30 Tage. Ist die Sprintlänge festgelegt, kann sie sich während eines Sprints nicht mehr ändern. Auch von Änderungen der Sprintlängen innerhalb eines Projektes ist abzusehen, da mithilfe der Sprintlänge eine gewisse Regelmäßigkeit eingeführt wird, die dem Team hilft, bessere Abschätzungen machen und eine stetige Leistung bringen zu können.

### Sprint Planungssitzung

Jeder Sprint beginnt mit einer Sprint Planungssitzung. In dieser wird ein konkretes Sprint Ziel definiert und formuliert, was vom Team erreicht werden soll.

In der Planungssitzung wird das Sprint Backlog erstellt, welches alle Anforderungen für das nächste Inkrement (also das Ergebnis des Sprints) enthält. Die Elemente des Sprint Backlogs werden aus dem priorisiertem Product Backlog entnommen. 

Das Ergebnis der Sprint Planungssitzung ist ein realistisches Sprint Backlog, sowie ein Team, dass sich zu dessen Realisierung verpflichtet hat.

### Daily Scrum {#scrum-daily-srcum}

Daily Scrum ist eine tägliche Sitzung innerhalb des Sprints, um das gesamte Team auf den momentanen Stand des Sprints zu bringen und anstehende und vergangene Aufgaben zu besprechen. Das Daily Scrum wird täglich am gleichen Ort und zur selben Zeit durchgeführt. Scrum schreibt eine Timebox (also ein Zeitlimit) von 15 Minuten vor. 

Es muss das gesamte Team anwesend sein, sowie der Scrum Master. Der Product Owner *sollte* für evtl. Rückfragen zu Anforderungen anwesend sein. Es können auch weitere Stakeholder anwesend sein, nur übernehmen sie keine aktive Rolle, sondern sind nur passive Zuhörer.

Zentraler Inhalt der Sitzung ist, dass alle Teammitglieder drei Fragen beantworten:

- Was habe ich seit dem letzten Daily Scrum für das Projekt getan?
- Was will ich bis zum nächsten Daily Scrum für das Projekt tun?
- Was hindert mich daran, so effektiv wie möglich zu arbeiten?

Der Scrum Master und der Product Owner sind für die Beseitigung der Probleme, die in der dritten Frage von den Teammitgliedern angesprochen werden, verantwortlich.

Es ist wichtig, das Zeitlimit von 15 Minuten einzuhalten, da diese Sitzung täglich stattfindet und eine regelmäßige Überschreitung des Zeitlimits zu viel Arbeitszeit kostet. Ein Daily Scrum ist auch nicht dazu da, um in einer gemeinsamen Sitzung alle Probleme und Fragen zu klären, die auftauchen, sondern will nur dafür sensibel machen. Das Team kann sich dann im Nachhinein in kleineren Gruppen treffen, um detailliert über die Problemstellung und mögliche Lösungsansätze zu diskutieren. So wird von Unbeteiligten nicht unnötige Arbeitszeit in Anspruch genommen.

Eine häufige Empfehlung ist die Durchführung des Daily Scrum im Stehen (dem sogenannten *Standup Meeting*). Durch die Tatsache, dass die Beteiligten stehen, entstehen keine langen Diskussionen und die "Sitzungen" im Stehen bleiben in der Regel kurz.


### Entwicklung im Sprint

Die Entwicklung innerhalb des Sprints geschieht ohne Störung von außen. Während eines Sprints dürfen die Anforderungen, wie sie im Sprint Backlog festgelegt wurden, nicht verändert werden. Somit kann sich das Team voll auf diese Anforderungen konzentrieren, ohne das es eine kurzfristige Änderung befürchten muss.

In Scrum gibt es keine Vorgaben, wie das Team zu entwickeln hat. Einzige Bedingung ist, dass es selbstorganisiert arbeitet. Häufig werden Praktiken aus XP angewandt (siehe Abschnitt \ref{xp-praktiken}).


### Sprint Review

Im Sprint Review präsentiert das Team dem Product Owner das Ergebnis des Sprints in Form von lauffähiger Software. Diese muss vollständig und fehlerfrei sein. Der Sprint Review hat eine maximale Länge von vier Stunden.

Bei dem Sprint Review wird ausschließlich lauffähige Software präsentiert, keine PowerPoint Präsentationen oder ähnliches. Das Team bereitet sich auf den Sprint Review nicht gesondert vor. So kann sichergestellt werden, dass der Product Owner den echten Projekt Status sieht.

Der Product Owner führt selbst Tests an der Software durch und entscheidet abschließend, ob das Ergebnis des Sprints zufriedenstellend ist.

### Sprint Retrospektive

Die Sprint Retrospektive ist eine Interne Reflektion des Teams zum Sprint. Sie dauert 3 Stunden und Teilnehmer sind das Team und der Scrum Master. Der Product Owner kann optional auch teilnehmen.

In der Sprint Retrospektive wird die Zusammenarbeit des Teams bewertet und Verbesserungsmaßnahmen zu einem effektiverem Teamwork entwickelt. Es wird darüber diskutiert, welche agile Praktiken für das Entwickeln gut funktionieren, und welche besser ausgetauscht werden. Das Ziel der Retrospektive ist die Optimierung des Prozesses. 


## Artefakte

In Scrum werden einige Artefakte festgelegt. Diese Artefakte dienen dazu, eine große Transparenz gegenüber allen Teilnehmern zu schaffen. 

### Product Backlog {#problemfeld-scrum-artefakte-product-backlog}

Das Product Backlog ist das zentrale Dokument zum Erfassen und Verwalten der Anforderungen, die das Projekt innehält. Die Einträge im Product Backlog werden Backlog Items genannt. Dabei entspricht ein Backlog Item einer Funktionalität, die für den Benutzer relevant ist. Hilfreich für die Anforderungsspezifikation im Product Backlog ist die Praktik der *User Storys* (siehe Abschnitt \ref{planung-user-stories}).

Der Product Owner ist für die Pflege, die Verwaltung und den Zugriff auf das Product Backlog zuständig. Er priorisiert die vorhandenen Einträge nach der Wichtigkeit für den Kunden und detailliert die Einträge im weiteren Projektverlauf. Mithilfe einer gemeinsamen Aufwandschätzung mit dem Team können so während der Sprint Planungssitzung die Backlog Items ausgewählt werden, die in das jeweilige Sprint Backlog übertragen werden.

### Sprint Backlog

Das Sprint Backlog ist ein Backlog, das die Aufgaben des aktuellen Sprints auflistet. Mithilfe dieser Aufgaben kann das Team während eines Sprints das Sprint Ziel erreichen. Es entsteht während der Sprint Planungssitzung, indem der der Product Owner zusammen mit dem Team die priorisierte Liste des Product Backlogs betrachtet und mit einer gemeinsamen Aufwandschätzung ein Paket zusammenstellt, welches bis zum Ende des Sprints abgearbeitet werden kann. Der Aufwand jedes einzelnen Items im Sprint Backlog ist abgeschätzt und beträgt weniger als 16 Stunden. Bei größeren Items muss das Item in kleinere Arbeitspakete aufgeteilt werden. Das Sprint Backlog stellt den momentanen Status der Entwicklungsarbeit dar.

### Inkrement

Das Inkrement ist das Ergebnis des Sprints, also das Arbeitsergebnis des Teams nach dem Ablauf des Sprints. Das Inkrement muss vollständig und fehlerfrei sein. Das bedeutet, alle Anforderungen, die im Sprint Backlog festgehalten wurden, müssen in dem Inkrement umgesetzt worden sein. Das Inkrement dient dem Team dazu, dem Product Owner während des Sprint Reviews die getane Arbeit des letzten Sprint zu präsentieren. Anhand des Inkrements überprüft der Product Owner die Leistung des Teams.