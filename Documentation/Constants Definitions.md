- TEST_MODE
If TRUE, during the images/dots display, the user answer will be simulated.
*Use for testing purposes only*.

- SHOW_DOTS
Define if the dots challenge is used or not.
With the dots challenge, the participant is shown a pattern of dots on a grid very briefly before each question. The participants must retain the pattern, answer the question and then replace the pattern on an empty grid.
This is an effecient way to introduce a cognitive load on the participant.

- DOTS_DURATION
Duration (in milliseconds) during which the dot pattern will be shown to the participant before each question. 
Only takes effect if SHOW_DOTS is true.

- DOTS_COUNT
Possible numbers of dots in a pattern (separated by ';').	
Eg. 2;4 means that for each subject, half of the repetitons will be presented with 2 dots, the other half with 4.

- RPT_SURVEY
Number of times (repetitions) a same subject is shown during survey.
The experiment will use all the subjects loaded on the server times this number of repetitions.
This can be useful as it allows to measure the participant accuracy when answering for a given subject.

- RPT_TRAINING
Number of times (repetitions) a same subject is shown during training.
This parameter is only here for consistency, it should be 1 since training answers are not recorded, hence no need to measure accuracy.

- NB_BREAKS_SURVEY
Number of breaks during survey.
If there are breaks, a message will automatically appear during the survey inviting the participant to take a 5 minutes break.
Set to 0 to disable.

- NB_BREAKS_TRAINING
Number of breaks during training.
This parameter is only here for consistency, it should be 0 since training should be short.

- FIXATION_CROSS_DURATION
Duration (in milliseconds) for display of the cross before each subject.
Before displaying a subject, a small cross will be presented in the center of the frame to focus the participants attention at that point.
Set to 0 to disable.

- VIDEO_DURATION
Maximum duration (in milliseconds) given to the participant to answer a question.
If the participant exceeds this delay, the question is skipped and a message will be displayed to encourage the participant to answer faster.
Set to 0 to disable (meaning, the participant has indefinite time to answer).

- EXPERIENCE_DURATION
Estimation of the duration (in minutes) of the experiment.
This is estimation will be shown in the introduction page.

- END_REDIRECT_DELAY
Delay (milliseconds) before redirecting to the home page at the end of the experiment.
Set to 0 to disable.

- END_REDIRACT_PAGE
At the end of the experiment, if the user clicks on exit or the END_REDIRECT_DELAY is reached, it will redirect to the page specified by this parameter.

- TABLE_USERS
Table in the SQL database where the participants will be stored.

- TABLE_ANSWERS
Table in the SQL database where the participants answers will be stored.

- TABLE_SUBJECTS
Table in the SQL database containing the list of videos for the survey.

- TABLE_TRAINING
Table in the SQL database containing the list of videos for the training.