CREATE TABLE IF NOT EXISTS `Users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`age` int NOT NULL,
	`gender` varchar(7) NOT NULL,
	`degree` varchar(20) NOT NULL,
	`origin_country` varchar(2) NOT NULL,
	`residence_country` varchar(2) NOT NULL,
	`properly_finished` boolean NOT NULL,
	`creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`break_time` bigint NOT NULL,
	`show_dots` boolean NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Subjects` (
	`id` int NOT NULL AUTO_INCREMENT,
	`path` varchar(50) NOT NULL,
	`is_lying` boolean NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Training` (
	`id` int NOT NULL AUTO_INCREMENT,
	`path` varchar(50) NOT NULL,
	`is_lying` boolean NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Answers` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`video_id` int NOT NULL,
	`is_lying` boolean NOT NULL,
	`response_time` bigint NOT NULL,
	`dots_reference` varchar(9) NOT NULL,
	`dots_answer` varchar(9) NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`),
	FOREIGN KEY (`video_id`) REFERENCES `Videos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;




INSERT INTO `Subjects` (path, is_lying) VALUES ('video1.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video2.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video3.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video4.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video5.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video6.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video7.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video8.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video9.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video10.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video11.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video12.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video13.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video14.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video15.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video16.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video17.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video18.mp4', true);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video19.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video20.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video21.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video22.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video23.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video24.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video25.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video26.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video27.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video28.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video29.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video30.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video31.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video32.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video33.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video34.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video35.mp4', false);
INSERT INTO `Subjects` (path, is_lying) VALUES ('video36.mp4', false);
INSERT INTO `Training` (path, is_lying) VALUES ('video37.mp4', false);
INSERT INTO `Training` (path, is_lying) VALUES ('video38.mp4', false);
INSERT INTO `Training` (path, is_lying) VALUES ('video39.mp4', false);
INSERT INTO `Training` (path, is_lying) VALUES ('video40.mp4', false);
