# Synopsis

This is the implementation of a social science experiment testing the participants ability to detect liars. The experiment is presented through a web interface and participants are asked if the presented subjects are lying or not.

This experiment is past of a research lead by a group of researchers at EPFL and UNIL. **TODO: Add links and/or logos**

# The interface

This code provides the interface for several variations of the experiment. For instance, the experiment may present subject using images or videos, it is also possible to add a *dots challenge*\* before each presented subject in order to induce a cognitive load. Many other settings are available (eg. breaks during the experiment, repetitions of the subjects, etc...), see [the documentation](/Documentation/Constants Definitions.txt)

All the users information and results are stored in a database.

The interface is available in English and French. **TODO: And greek?**

\* *With the dots challenge, the participant is shown a pattern of dots on a grid very briefly before each question. The participants must retain the pattern, answer the question and then replace the pattern on an empty grid.*


# The research

This experiment is part of a research trying to define the nature of our ability to detect lies. In fact, by observing the participants accuracy and, more importantly, their response time, this experiment tries to define whether our natural ability to dectect lies is a central (ie. active, trained, slow) process or a modular (ie. passive, innate, fast) process.

Learn more about the experiment and results on the following [report](/Reports/canale.pdf).


# Setup

To setup the experiment on a server, follow the instructions **TODO: Link to documentation**



### Presentation of some features

* All content (images or videos) are preloaded and the start of the experiment, ensuring no delay through the actual survey.
* Every subject is presented several times to measure accuracy (typically, 4 repetitions).
* The subjects are presented in a pseudo random order. More specifically, the order is random but yet ensures that no two same subjects follow each other.
* Session tracking: This prevents the users tries to access a page in the wrong order or tries to restart the survey by changing the URL or refreshing the page.


### Todos

Index path for the variation (EN + images) is not complete
Merge videos and images experience somehow