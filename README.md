# Synopsis

This is the implementation of a social science experiment testing the participants ability to detect liars. The experiment is presented through a web interface and participants are asked if the presented subjects are lying or not.

This experiment is past of a research lead by a group of researchers at EPFL and UNIL.

# The interface

This version of the experiment presents subjects using short videos with no sound. For the same experiment but using images instead of videos, please refer to the [master branch](https://github.com/RaffaeleCanale/Lying-Cues-Experience/tree/master).

This code provides the interface for several variations of the experiment. Many settings are available such as: including the dots challenge, set a timeout for each question, include one or more breaks, etc... For all the details on the experiment settings, see the [documentation](/Documentation/Constants Definitions.md).

All the users information and results are stored in a database.

The interface is available in English, French and Greek\*.

\* *Greek translation is not complete for the variations including the dots challenge or breaks.*

# The research

This experiment is part of a research trying to define the nature of our ability to detect lies. In fact, by observing the participants accuracy and, more importantly, their response time, this experiment tries to define whether our natural ability to detect lies is a central (ie. active, trained, slow) process or a modular (ie. passive, innate, fast) process.

Learn more about the experiment and results on the following [report](/Reports/canale.pdf).


# Setup

To setup the experiment on a server, follow these [instructions](/Documentation/README.md).



### Presentation of some features

* All content (images or videos) are preloaded and the start of the experiment, ensuring no delay through the actual survey.
* Every subject is presented several times to measure accuracy (typically, 4 repetitions).
* The subjects are presented in a pseudo random order. More specifically, the order is random but yet ensures that no two same subjects follow each other.
* Session tracking: This prevents the users tries to access a page in the wrong order or tries to restart the survey by changing the URL or refreshing the page.
