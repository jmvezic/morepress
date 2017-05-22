-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: morepress
-- ------------------------------------------------------
-- Server version	5.5.47-0+deb8u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `access_keys`
--

DROP TABLE IF EXISTS `access_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_keys` (
  `access_key_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `context` varchar(40) NOT NULL,
  `key_hash` varchar(40) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `expiry_date` datetime NOT NULL,
  PRIMARY KEY (`access_key_id`),
  KEY `access_keys_hash` (`key_hash`,`user_id`,`context`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_keys`
--

LOCK TABLES `access_keys` WRITE;
/*!40000 ALTER TABLE `access_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `access_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement_settings`
--

DROP TABLE IF EXISTS `announcement_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement_settings` (
  `announcement_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `announcement_settings_pkey` (`announcement_id`,`locale`,`setting_name`),
  KEY `announcement_settings_announcement_id` (`announcement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement_settings`
--

LOCK TABLES `announcement_settings` WRITE;
/*!40000 ALTER TABLE `announcement_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcement_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement_type_settings`
--

DROP TABLE IF EXISTS `announcement_type_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement_type_settings` (
  `type_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `announcement_type_settings_pkey` (`type_id`,`locale`,`setting_name`),
  KEY `announcement_type_settings_type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement_type_settings`
--

LOCK TABLES `announcement_type_settings` WRITE;
/*!40000 ALTER TABLE `announcement_type_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcement_type_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcement_types`
--

DROP TABLE IF EXISTS `announcement_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement_types` (
  `type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` smallint(6) DEFAULT NULL,
  `assoc_id` bigint(20) NOT NULL,
  PRIMARY KEY (`type_id`),
  KEY `announcement_types_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement_types`
--

LOCK TABLES `announcement_types` WRITE;
/*!40000 ALTER TABLE `announcement_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcement_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `announcement_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` smallint(6) DEFAULT NULL,
  `assoc_id` bigint(20) NOT NULL,
  `type_id` bigint(20) DEFAULT NULL,
  `date_expire` datetime DEFAULT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`announcement_id`),
  KEY `announcements_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_comments`
--

DROP TABLE IF EXISTS `article_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_comments` (
  `comment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment_type` bigint(20) DEFAULT NULL,
  `role_id` bigint(20) NOT NULL,
  `article_id` bigint(20) NOT NULL,
  `assoc_id` bigint(20) NOT NULL,
  `author_id` bigint(20) NOT NULL,
  `comment_title` varchar(255) NOT NULL,
  `comments` text,
  `date_posted` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `viewable` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `article_comments_article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_comments`
--

LOCK TABLES `article_comments` WRITE;
/*!40000 ALTER TABLE `article_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_files`
--

DROP TABLE IF EXISTS `article_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_files` (
  `file_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `revision` bigint(20) NOT NULL,
  `source_file_id` bigint(20) DEFAULT NULL,
  `source_revision` bigint(20) DEFAULT NULL,
  `article_id` bigint(20) NOT NULL,
  `file_name` varchar(90) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `original_file_name` varchar(127) DEFAULT NULL,
  `file_stage` bigint(20) NOT NULL,
  `viewable` tinyint(4) DEFAULT NULL,
  `date_uploaded` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `round` tinyint(4) NOT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`file_id`,`revision`),
  KEY `article_files_article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_files`
--

LOCK TABLES `article_files` WRITE;
/*!40000 ALTER TABLE `article_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_galley_settings`
--

DROP TABLE IF EXISTS `article_galley_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_galley_settings` (
  `galley_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `article_galley_settings_pkey` (`galley_id`,`locale`,`setting_name`),
  KEY `article_galley_settings_galley_id` (`galley_id`),
  KEY `article_galley_settings_name_value` (`setting_name`(50),`setting_value`(150))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_galley_settings`
--

LOCK TABLES `article_galley_settings` WRITE;
/*!40000 ALTER TABLE `article_galley_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_galley_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_galleys`
--

DROP TABLE IF EXISTS `article_galleys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_galleys` (
  `galley_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `locale` varchar(5) DEFAULT NULL,
  `article_id` bigint(20) NOT NULL,
  `file_id` bigint(20) NOT NULL,
  `label` varchar(32) DEFAULT NULL,
  `html_galley` tinyint(4) NOT NULL DEFAULT '0',
  `style_file_id` bigint(20) DEFAULT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `remote_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`galley_id`),
  KEY `article_galleys_article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_galleys`
--

LOCK TABLES `article_galleys` WRITE;
/*!40000 ALTER TABLE `article_galleys` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_galleys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_html_galley_images`
--

DROP TABLE IF EXISTS `article_html_galley_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_html_galley_images` (
  `galley_id` bigint(20) NOT NULL,
  `file_id` bigint(20) NOT NULL,
  UNIQUE KEY `article_html_galley_images_pkey` (`galley_id`,`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_html_galley_images`
--

LOCK TABLES `article_html_galley_images` WRITE;
/*!40000 ALTER TABLE `article_html_galley_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_html_galley_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_search_keyword_list`
--

DROP TABLE IF EXISTS `article_search_keyword_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_search_keyword_list` (
  `keyword_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keyword_text` varchar(60) NOT NULL,
  PRIMARY KEY (`keyword_id`),
  UNIQUE KEY `article_search_keyword_text` (`keyword_text`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_search_keyword_list`
--

LOCK TABLES `article_search_keyword_list` WRITE;
/*!40000 ALTER TABLE `article_search_keyword_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_search_keyword_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_search_object_keywords`
--

DROP TABLE IF EXISTS `article_search_object_keywords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_search_object_keywords` (
  `object_id` bigint(20) NOT NULL,
  `keyword_id` bigint(20) NOT NULL,
  `pos` int(11) NOT NULL,
  UNIQUE KEY `article_search_object_keywords_pkey` (`object_id`,`pos`),
  KEY `article_search_object_keywords_keyword_id` (`keyword_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_search_object_keywords`
--

LOCK TABLES `article_search_object_keywords` WRITE;
/*!40000 ALTER TABLE `article_search_object_keywords` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_search_object_keywords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_search_objects`
--

DROP TABLE IF EXISTS `article_search_objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_search_objects` (
  `object_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) NOT NULL,
  `type` int(11) NOT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_search_objects`
--

LOCK TABLES `article_search_objects` WRITE;
/*!40000 ALTER TABLE `article_search_objects` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_search_objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_settings`
--

DROP TABLE IF EXISTS `article_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_settings` (
  `article_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `article_settings_pkey` (`article_id`,`locale`,`setting_name`),
  KEY `article_settings_article_id` (`article_id`),
  KEY `article_settings_name_value` (`setting_name`(50),`setting_value`(150))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_settings`
--

LOCK TABLES `article_settings` WRITE;
/*!40000 ALTER TABLE `article_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_supp_file_settings`
--

DROP TABLE IF EXISTS `article_supp_file_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_supp_file_settings` (
  `supp_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `article_supp_file_settings_pkey` (`supp_id`,`locale`,`setting_name`),
  KEY `article_supp_file_settings_supp_id` (`supp_id`),
  KEY `article_supp_file_settings_name_value` (`setting_name`(50),`setting_value`(150))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_supp_file_settings`
--

LOCK TABLES `article_supp_file_settings` WRITE;
/*!40000 ALTER TABLE `article_supp_file_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_supp_file_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_supplementary_files`
--

DROP TABLE IF EXISTS `article_supplementary_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_supplementary_files` (
  `supp_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `file_id` bigint(20) NOT NULL,
  `article_id` bigint(20) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `remote_url` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `show_reviewers` tinyint(4) DEFAULT '0',
  `date_submitted` datetime NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`supp_id`),
  KEY `article_supplementary_files_file_id` (`file_id`),
  KEY `article_supplementary_files_article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_supplementary_files`
--

LOCK TABLES `article_supplementary_files` WRITE;
/*!40000 ALTER TABLE `article_supplementary_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_supplementary_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_xml_galleys`
--

DROP TABLE IF EXISTS `article_xml_galleys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_xml_galleys` (
  `xml_galley_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `galley_id` bigint(20) NOT NULL,
  `article_id` bigint(20) NOT NULL,
  `label` varchar(32) NOT NULL,
  `galley_type` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`xml_galley_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_xml_galleys`
--

LOCK TABLES `article_xml_galleys` WRITE;
/*!40000 ALTER TABLE `article_xml_galleys` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_xml_galleys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `article_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `locale` varchar(5) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `journal_id` bigint(20) NOT NULL,
  `section_id` bigint(20) DEFAULT NULL,
  `language` varchar(10) DEFAULT 'en',
  `comments_to_ed` text,
  `citations` text,
  `date_submitted` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_status_modified` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `submission_progress` tinyint(4) NOT NULL DEFAULT '1',
  `current_round` tinyint(4) NOT NULL DEFAULT '1',
  `submission_file_id` bigint(20) DEFAULT NULL,
  `revised_file_id` bigint(20) DEFAULT NULL,
  `review_file_id` bigint(20) DEFAULT NULL,
  `editor_file_id` bigint(20) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `fast_tracked` tinyint(4) NOT NULL DEFAULT '0',
  `hide_author` tinyint(4) NOT NULL DEFAULT '0',
  `comments_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `articles_user_id` (`user_id`),
  KEY `articles_journal_id` (`journal_id`),
  KEY `articles_section_id` (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_sources`
--

DROP TABLE IF EXISTS `auth_sources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_sources` (
  `auth_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `plugin` varchar(32) NOT NULL,
  `auth_default` tinyint(4) NOT NULL DEFAULT '0',
  `settings` text,
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_sources`
--

LOCK TABLES `auth_sources` WRITE;
/*!40000 ALTER TABLE `auth_sources` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_sources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `author_settings`
--

DROP TABLE IF EXISTS `author_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author_settings` (
  `author_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `author_settings_pkey` (`author_id`,`locale`,`setting_name`),
  KEY `author_settings_author_id` (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author_settings`
--

LOCK TABLES `author_settings` WRITE;
/*!40000 ALTER TABLE `author_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `author_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `author_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `submission_id` bigint(20) NOT NULL,
  `primary_contact` tinyint(4) NOT NULL DEFAULT '0',
  `seq` double NOT NULL DEFAULT '0',
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(90) NOT NULL,
  `suffix` varchar(40) DEFAULT NULL,
  `country` varchar(90) DEFAULT NULL,
  `email` varchar(90) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `user_group_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`author_id`),
  KEY `authors_submission_id` (`submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_for_review`
--

DROP TABLE IF EXISTS `books_for_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_for_review` (
  `book_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `status` smallint(6) NOT NULL,
  `author_type` smallint(6) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `year` smallint(6) NOT NULL,
  `language` varchar(10) NOT NULL DEFAULT 'en',
  `copy` tinyint(4) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `edition` tinyint(4) DEFAULT NULL,
  `pages` smallint(6) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_requested` datetime DEFAULT NULL,
  `date_assigned` datetime DEFAULT NULL,
  `date_mailed` datetime DEFAULT NULL,
  `date_due` datetime DEFAULT NULL,
  `date_submitted` datetime DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `editor_id` bigint(20) DEFAULT NULL,
  `article_id` bigint(20) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`book_id`),
  KEY `bfr_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_for_review`
--

LOCK TABLES `books_for_review` WRITE;
/*!40000 ALTER TABLE `books_for_review` DISABLE KEYS */;
/*!40000 ALTER TABLE `books_for_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_for_review_authors`
--

DROP TABLE IF EXISTS `books_for_review_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_for_review_authors` (
  `author_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `book_id` bigint(20) NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(90) NOT NULL,
  PRIMARY KEY (`author_id`),
  KEY `bfr_book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_for_review_authors`
--

LOCK TABLES `books_for_review_authors` WRITE;
/*!40000 ALTER TABLE `books_for_review_authors` DISABLE KEYS */;
/*!40000 ALTER TABLE `books_for_review_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_for_review_settings`
--

DROP TABLE IF EXISTS `books_for_review_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_for_review_settings` (
  `book_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `bfr_settings_pkey` (`book_id`,`locale`,`setting_name`),
  KEY `bfr_settings_book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_for_review_settings`
--

LOCK TABLES `books_for_review_settings` WRITE;
/*!40000 ALTER TABLE `books_for_review_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `books_for_review_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `captchas`
--

DROP TABLE IF EXISTS `captchas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `captchas` (
  `captcha_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(40) NOT NULL,
  `value` varchar(20) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`captcha_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `captchas`
--

LOCK TABLES `captchas` WRITE;
/*!40000 ALTER TABLE `captchas` DISABLE KEYS */;
/*!40000 ALTER TABLE `captchas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citation_settings`
--

DROP TABLE IF EXISTS `citation_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citation_settings` (
  `citation_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `citation_settings_pkey` (`citation_id`,`locale`,`setting_name`),
  KEY `citation_settings_citation_id` (`citation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citation_settings`
--

LOCK TABLES `citation_settings` WRITE;
/*!40000 ALTER TABLE `citation_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `citation_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citations`
--

DROP TABLE IF EXISTS `citations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citations` (
  `citation_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` bigint(20) NOT NULL DEFAULT '0',
  `assoc_id` bigint(20) NOT NULL DEFAULT '0',
  `citation_state` bigint(20) NOT NULL,
  `raw_citation` text,
  `seq` bigint(20) NOT NULL DEFAULT '0',
  `lock_id` varchar(23) DEFAULT NULL,
  PRIMARY KEY (`citation_id`),
  UNIQUE KEY `citations_assoc_seq` (`assoc_type`,`assoc_id`,`seq`),
  KEY `citations_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citations`
--

LOCK TABLES `citations` WRITE;
/*!40000 ALTER TABLE `citations` DISABLE KEYS */;
/*!40000 ALTER TABLE `citations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `submission_id` bigint(20) NOT NULL,
  `parent_comment_id` bigint(20) DEFAULT NULL,
  `num_children` int(11) NOT NULL DEFAULT '0',
  `user_id` bigint(20) DEFAULT NULL,
  `poster_ip` varchar(15) NOT NULL,
  `poster_name` varchar(90) DEFAULT NULL,
  `poster_email` varchar(90) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `date_posted` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comments_submission_id` (`submission_id`),
  KEY `comments_parent_comment_id` (`parent_comment_id`),
  KEY `comments_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `completed_payments`
--

DROP TABLE IF EXISTS `completed_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `completed_payments` (
  `completed_payment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `payment_type` bigint(20) NOT NULL,
  `journal_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `amount` double NOT NULL,
  `currency_code_alpha` varchar(3) DEFAULT NULL,
  `payment_method_plugin_name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`completed_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `completed_payments`
--

LOCK TABLES `completed_payments` WRITE;
/*!40000 ALTER TABLE `completed_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `completed_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlled_vocab_entries`
--

DROP TABLE IF EXISTS `controlled_vocab_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controlled_vocab_entries` (
  `controlled_vocab_entry_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `controlled_vocab_id` bigint(20) NOT NULL,
  `seq` double DEFAULT NULL,
  PRIMARY KEY (`controlled_vocab_entry_id`),
  KEY `controlled_vocab_entries_cv_id` (`controlled_vocab_id`,`seq`)
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlled_vocab_entries`
--

LOCK TABLES `controlled_vocab_entries` WRITE;
/*!40000 ALTER TABLE `controlled_vocab_entries` DISABLE KEYS */;
INSERT INTO `controlled_vocab_entries` VALUES (100,100,1),(101,100,2),(102,100,3),(110,101,1),(111,101,2),(112,101,3),(113,101,4),(114,101,5),(115,101,6),(116,101,7),(120,102,1),(121,102,2),(122,102,3),(130,103,1),(131,103,2),(132,103,3),(133,103,4),(134,103,5),(135,103,6),(136,103,7),(137,103,8),(138,103,9),(139,103,10),(140,103,11),(141,103,12),(150,104,1),(151,104,2),(200,200,1),(201,200,2),(202,200,3),(203,200,4),(300,300,1),(301,300,2),(302,300,3),(303,300,4),(304,300,5),(305,300,6),(306,300,7),(310,301,1),(311,301,2),(312,301,3),(313,301,4),(314,301,5),(315,301,6),(316,301,7);
/*!40000 ALTER TABLE `controlled_vocab_entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlled_vocab_entry_settings`
--

DROP TABLE IF EXISTS `controlled_vocab_entry_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controlled_vocab_entry_settings` (
  `controlled_vocab_entry_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `c_v_e_s_pkey` (`controlled_vocab_entry_id`,`locale`,`setting_name`),
  KEY `c_v_e_s_entry_id` (`controlled_vocab_entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlled_vocab_entry_settings`
--

LOCK TABLES `controlled_vocab_entry_settings` WRITE;
/*!40000 ALTER TABLE `controlled_vocab_entry_settings` DISABLE KEYS */;
INSERT INTO `controlled_vocab_entry_settings` VALUES (100,'','name','personal','string'),(101,'','name','corporate','string'),(102,'','name','conference','string'),(110,'','description','Author','string'),(110,'','name','aut','string'),(111,'','description','Contributor','string'),(111,'','name','ctb','string'),(112,'','description','Editor','string'),(112,'','name','edt','string'),(113,'','description','Illustrator','string'),(113,'','name','ill','string'),(114,'','description','Photographer','string'),(114,'','name','pht','string'),(115,'','description','Sponsor','string'),(115,'','name','spn','string'),(116,'','description','Translator','string'),(116,'','name','trl','string'),(120,'','name','multimedia','string'),(121,'','name','still image','string'),(122,'','name','text','string'),(130,'','name','article','string'),(131,'','name','book','string'),(132,'','name','conference publication','string'),(133,'','name','issue','string'),(134,'','name','journal','string'),(135,'','name','newspaper','string'),(136,'','name','picture','string'),(137,'','name','review','string'),(138,'','name','periodical','string'),(139,'','name','series','string'),(140,'','name','thesis','string'),(141,'','name','web site','string'),(150,'','name','electronic','string'),(151,'','name','print','string'),(200,'','name','journal','string'),(201,'','name','book','string'),(202,'','name','conf-proc','string'),(203,'','name','thesis','string'),(300,'','name','journal','string'),(301,'','name','issue','string'),(302,'','name','article','string'),(303,'','name','proceeding','string'),(304,'','name','conference','string'),(305,'','name','preprint','string'),(306,'','name','unknown','string'),(310,'','name','book','string'),(311,'','name','bookitem','string'),(312,'','name','proceeding','string'),(313,'','name','conference','string'),(314,'','name','report','string'),(315,'','name','document','string'),(316,'','name','unknown','string');
/*!40000 ALTER TABLE `controlled_vocab_entry_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlled_vocabs`
--

DROP TABLE IF EXISTS `controlled_vocabs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controlled_vocabs` (
  `controlled_vocab_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `symbolic` varchar(64) NOT NULL,
  `assoc_type` bigint(20) NOT NULL DEFAULT '0',
  `assoc_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`controlled_vocab_id`),
  UNIQUE KEY `controlled_vocab_symbolic` (`symbolic`,`assoc_type`,`assoc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlled_vocabs`
--

LOCK TABLES `controlled_vocabs` WRITE;
/*!40000 ALTER TABLE `controlled_vocabs` DISABLE KEYS */;
INSERT INTO `controlled_vocabs` VALUES (103,'mods34-genre-marcgt',0,0),(101,'mods34-name-role-roleTerms-marcrelator',0,0),(100,'mods34-name-types',0,0),(104,'mods34-physicalDescription-form-marcform',0,0),(102,'mods34-typeOfResource',0,0),(200,'nlm30-publication-types',0,0),(301,'openurl10-book-genres',0,0),(300,'openurl10-journal-genres',0,0);
/*!40000 ALTER TABLE `controlled_vocabs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_issue_orders`
--

DROP TABLE IF EXISTS `custom_issue_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom_issue_orders` (
  `issue_id` bigint(20) NOT NULL,
  `journal_id` bigint(20) NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  UNIQUE KEY `custom_issue_orders_pkey` (`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_issue_orders`
--

LOCK TABLES `custom_issue_orders` WRITE;
/*!40000 ALTER TABLE `custom_issue_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `custom_issue_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_section_orders`
--

DROP TABLE IF EXISTS `custom_section_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom_section_orders` (
  `issue_id` bigint(20) NOT NULL,
  `section_id` bigint(20) NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  UNIQUE KEY `custom_section_orders_pkey` (`issue_id`,`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_section_orders`
--

LOCK TABLES `custom_section_orders` WRITE;
/*!40000 ALTER TABLE `custom_section_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `custom_section_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_object_tombstone_oai_set_objects`
--

DROP TABLE IF EXISTS `data_object_tombstone_oai_set_objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_object_tombstone_oai_set_objects` (
  `object_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tombstone_id` bigint(20) NOT NULL,
  `assoc_type` bigint(20) NOT NULL,
  `assoc_id` bigint(20) NOT NULL,
  PRIMARY KEY (`object_id`),
  KEY `data_object_tombstone_oai_set_objects_tombstone_id` (`tombstone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_object_tombstone_oai_set_objects`
--

LOCK TABLES `data_object_tombstone_oai_set_objects` WRITE;
/*!40000 ALTER TABLE `data_object_tombstone_oai_set_objects` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_object_tombstone_oai_set_objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_object_tombstone_settings`
--

DROP TABLE IF EXISTS `data_object_tombstone_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_object_tombstone_settings` (
  `tombstone_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `data_object_tombstone_settings_pkey` (`tombstone_id`,`locale`,`setting_name`),
  KEY `data_object_tombstone_settings_tombstone_id` (`tombstone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_object_tombstone_settings`
--

LOCK TABLES `data_object_tombstone_settings` WRITE;
/*!40000 ALTER TABLE `data_object_tombstone_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_object_tombstone_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_object_tombstones`
--

DROP TABLE IF EXISTS `data_object_tombstones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_object_tombstones` (
  `tombstone_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `data_object_id` bigint(20) NOT NULL,
  `date_deleted` datetime NOT NULL,
  `set_spec` varchar(255) NOT NULL,
  `set_name` varchar(255) NOT NULL,
  `oai_identifier` varchar(255) NOT NULL,
  PRIMARY KEY (`tombstone_id`),
  KEY `data_object_tombstones_data_object_id` (`data_object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_object_tombstones`
--

LOCK TABLES `data_object_tombstones` WRITE;
/*!40000 ALTER TABLE `data_object_tombstones` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_object_tombstones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataverse_files`
--

DROP TABLE IF EXISTS `dataverse_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dataverse_files` (
  `dvfile_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `supp_id` bigint(20) NOT NULL,
  `submission_id` bigint(20) NOT NULL,
  `study_id` bigint(20) NOT NULL DEFAULT '0',
  `content_source_uri` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`dvfile_id`),
  KEY `dataverse_files_supp_id` (`supp_id`),
  KEY `dataverse_files_submission_id` (`submission_id`),
  KEY `dataverse_files_study_id` (`study_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataverse_files`
--

LOCK TABLES `dataverse_files` WRITE;
/*!40000 ALTER TABLE `dataverse_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `dataverse_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataverse_studies`
--

DROP TABLE IF EXISTS `dataverse_studies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dataverse_studies` (
  `study_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `submission_id` bigint(20) NOT NULL,
  `edit_uri` varchar(255) NOT NULL,
  `edit_media_uri` varchar(255) NOT NULL,
  `statement_uri` varchar(255) NOT NULL,
  `persistent_uri` varchar(255) NOT NULL,
  `data_citation` text,
  PRIMARY KEY (`study_id`),
  KEY `dataverse_studies_submission_id` (`submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataverse_studies`
--

LOCK TABLES `dataverse_studies` WRITE;
/*!40000 ALTER TABLE `dataverse_studies` DISABLE KEYS */;
/*!40000 ALTER TABLE `dataverse_studies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_assignments`
--

DROP TABLE IF EXISTS `edit_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_assignments` (
  `edit_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) NOT NULL,
  `editor_id` bigint(20) NOT NULL,
  `can_edit` tinyint(4) NOT NULL DEFAULT '1',
  `can_review` tinyint(4) NOT NULL DEFAULT '1',
  `date_assigned` datetime DEFAULT NULL,
  `date_notified` datetime DEFAULT NULL,
  `date_underway` datetime DEFAULT NULL,
  PRIMARY KEY (`edit_id`),
  KEY `edit_assignments_article_id` (`article_id`),
  KEY `edit_assignments_editor_id` (`editor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_assignments`
--

LOCK TABLES `edit_assignments` WRITE;
/*!40000 ALTER TABLE `edit_assignments` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `edit_decisions`
--

DROP TABLE IF EXISTS `edit_decisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `edit_decisions` (
  `edit_decision_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) NOT NULL,
  `round` tinyint(4) NOT NULL,
  `editor_id` bigint(20) NOT NULL,
  `decision` tinyint(4) NOT NULL,
  `date_decided` datetime NOT NULL,
  PRIMARY KEY (`edit_decision_id`),
  KEY `edit_decisions_article_id` (`article_id`),
  KEY `edit_decisions_editor_id` (`editor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `edit_decisions`
--

LOCK TABLES `edit_decisions` WRITE;
/*!40000 ALTER TABLE `edit_decisions` DISABLE KEYS */;
/*!40000 ALTER TABLE `edit_decisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_log`
--

DROP TABLE IF EXISTS `email_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_log` (
  `log_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `sender_id` bigint(20) NOT NULL,
  `date_sent` datetime NOT NULL,
  `ip_address` varchar(39) DEFAULT NULL,
  `event_type` bigint(20) DEFAULT NULL,
  `from_address` varchar(255) DEFAULT NULL,
  `recipients` text,
  `cc_recipients` text,
  `bcc_recipients` text,
  `subject` varchar(255) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`log_id`),
  KEY `email_log_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_log`
--

LOCK TABLES `email_log` WRITE;
/*!40000 ALTER TABLE `email_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_log_users`
--

DROP TABLE IF EXISTS `email_log_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_log_users` (
  `email_log_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  UNIQUE KEY `email_log_user_id` (`email_log_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_log_users`
--

LOCK TABLES `email_log_users` WRITE;
/*!40000 ALTER TABLE `email_log_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_log_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templates`
--

DROP TABLE IF EXISTS `email_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templates` (
  `email_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email_key` varchar(64) NOT NULL,
  `assoc_type` bigint(20) DEFAULT '0',
  `assoc_id` bigint(20) DEFAULT '0',
  `enabled` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`email_id`),
  UNIQUE KEY `email_templates_email_key` (`email_key`,`assoc_type`,`assoc_id`),
  KEY `email_templates_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templates`
--

LOCK TABLES `email_templates` WRITE;
/*!40000 ALTER TABLE `email_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templates_data`
--

DROP TABLE IF EXISTS `email_templates_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templates_data` (
  `email_key` varchar(64) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT 'en_US',
  `assoc_type` bigint(20) DEFAULT '0',
  `assoc_id` bigint(20) DEFAULT '0',
  `subject` varchar(120) NOT NULL,
  `body` text,
  UNIQUE KEY `email_templates_data_pkey` (`email_key`,`locale`,`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templates_data`
--

LOCK TABLES `email_templates_data` WRITE;
/*!40000 ALTER TABLE `email_templates_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_templates_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templates_default`
--

DROP TABLE IF EXISTS `email_templates_default`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templates_default` (
  `email_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email_key` varchar(64) NOT NULL,
  `can_disable` tinyint(4) NOT NULL DEFAULT '1',
  `can_edit` tinyint(4) NOT NULL DEFAULT '1',
  `from_role_id` bigint(20) DEFAULT NULL,
  `to_role_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`email_id`),
  KEY `email_templates_default_email_key` (`email_key`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templates_default`
--

LOCK TABLES `email_templates_default` WRITE;
/*!40000 ALTER TABLE `email_templates_default` DISABLE KEYS */;
INSERT INTO `email_templates_default` VALUES (1,'NOTIFICATION',0,1,NULL,NULL),(2,'NOTIFICATION_MAILLIST',0,1,NULL,NULL),(3,'NOTIFICATION_MAILLIST_WELCOME',0,1,NULL,NULL),(4,'PASSWORD_RESET_CONFIRM',0,1,NULL,NULL),(5,'PASSWORD_RESET',0,1,NULL,NULL),(6,'USER_REGISTER',0,1,NULL,NULL),(7,'USER_VALIDATE',0,1,NULL,NULL),(8,'REVIEWER_REGISTER',0,1,NULL,NULL),(9,'PUBLISH_NOTIFY',0,1,NULL,NULL),(10,'LOCKSS_EXISTING_ARCHIVE',0,1,NULL,NULL),(11,'LOCKSS_NEW_ARCHIVE',0,1,NULL,NULL),(12,'SUBMISSION_ACK',1,1,NULL,65536),(13,'SUBMISSION_UNSUITABLE',1,1,512,65536),(14,'SUBMISSION_COMMENT',0,1,NULL,NULL),(15,'SUBMISSION_DECISION_REVIEWERS',0,1,512,4096),(16,'EDITOR_ASSIGN',1,1,256,512),(17,'REVIEW_CANCEL',1,1,512,4096),(18,'REVIEW_REQUEST',1,1,512,4096),(19,'REVIEW_REQUEST_SUBSEQUENT',1,1,512,4096),(20,'REVIEW_REQUEST_ONECLICK',1,1,512,4096),(21,'REVIEW_REQUEST_ONECLICK_SUBSEQUENT',1,1,512,4096),(22,'REVIEW_REQUEST_ATTACHED',0,1,512,4096),(23,'REVIEW_REQUEST_ATTACHED_SUBSEQUENT',0,1,512,4096),(24,'REVIEW_CONFIRM',1,1,4096,512),(25,'REVIEW_DECLINE',1,1,4096,512),(26,'REVIEW_COMPLETE',1,1,4096,512),(27,'REVIEW_ACK',1,1,512,4096),(28,'REVIEW_REMIND',0,1,512,4096),(29,'REVIEW_REMIND_AUTO',0,1,NULL,4096),(30,'REVIEW_REMIND_ONECLICK',0,1,512,4096),(31,'REVIEW_REMIND_AUTO_ONECLICK',0,1,NULL,4096),(32,'EDITOR_DECISION_ACCEPT',0,1,512,65536),(33,'EDITOR_DECISION_REVISIONS',0,1,512,65536),(34,'EDITOR_DECISION_RESUBMIT',0,1,512,65536),(35,'EDITOR_DECISION_DECLINE',0,1,512,65536),(36,'COPYEDIT_REQUEST',1,1,512,8192),(37,'COPYEDIT_COMPLETE',1,1,8192,65536),(38,'COPYEDIT_ACK',1,1,512,8192),(39,'COPYEDIT_AUTHOR_REQUEST',1,1,512,65536),(40,'COPYEDIT_AUTHOR_COMPLETE',1,1,65536,512),(41,'COPYEDIT_AUTHOR_ACK',1,1,512,65536),(42,'COPYEDIT_FINAL_REQUEST',1,1,512,8192),(43,'COPYEDIT_FINAL_COMPLETE',1,1,8192,512),(44,'COPYEDIT_FINAL_ACK',1,1,512,8192),(45,'LAYOUT_REQUEST',1,1,512,768),(46,'LAYOUT_COMPLETE',1,1,768,512),(47,'LAYOUT_ACK',1,1,512,768),(48,'PROOFREAD_AUTHOR_REQUEST',1,1,512,65536),(49,'PROOFREAD_AUTHOR_COMPLETE',1,1,65536,512),(50,'PROOFREAD_AUTHOR_ACK',1,1,512,65536),(51,'PROOFREAD_REQUEST',1,1,512,12288),(52,'PROOFREAD_COMPLETE',1,1,12288,512),(53,'PROOFREAD_ACK',1,1,512,12288),(54,'PROOFREAD_LAYOUT_REQUEST',1,1,512,768),(55,'PROOFREAD_LAYOUT_COMPLETE',1,1,768,512),(56,'PROOFREAD_LAYOUT_ACK',1,1,512,768),(57,'EMAIL_LINK',0,1,1048576,NULL),(58,'SUBSCRIPTION_NOTIFY',0,1,NULL,1048576),(59,'OPEN_ACCESS_NOTIFY',0,1,NULL,1048576),(60,'SUBSCRIPTION_BEFORE_EXPIRY',0,1,NULL,1048576),(61,'SUBSCRIPTION_AFTER_EXPIRY',0,1,NULL,1048576),(62,'SUBSCRIPTION_AFTER_EXPIRY_LAST',0,1,NULL,1048576),(63,'SUBSCRIPTION_PURCHASE_INDL',0,1,NULL,2097152),(64,'SUBSCRIPTION_PURCHASE_INSTL',0,1,NULL,2097152),(65,'SUBSCRIPTION_RENEW_INDL',0,1,NULL,2097152),(66,'SUBSCRIPTION_RENEW_INSTL',0,1,NULL,2097152),(67,'CITATION_EDITOR_AUTHOR_QUERY',0,1,NULL,NULL),(68,'GIFT_AVAILABLE',0,1,NULL,NULL),(69,'GIFT_USER_REGISTER',0,1,NULL,NULL),(70,'GIFT_USER_LOGIN',0,1,NULL,NULL),(71,'REVISED_VERSION_NOTIFY',0,1,NULL,512),(72,'OFR_REVIEW_REMINDER',0,1,256,65536),(73,'OFR_REVIEW_REMINDER_LATE',0,1,256,65536),(74,'OFR_OBJECT_ASSIGNED',0,1,256,65536),(75,'OFR_OBJECT_DENIED',0,1,256,65536),(76,'OFR_OBJECT_REQUESTED',0,1,65536,256),(77,'OFR_OBJECT_MAILED',0,1,256,65536),(78,'OFR_REVIEWER_REMOVED',0,1,256,65536),(79,'LUCENE_ARTICLE_INDEXING_ERROR_NOTIFICATION',1,1,NULL,NULL),(80,'LUCENE_JOURNAL_INDEXING_ERROR_NOTIFICATION',1,1,NULL,NULL),(81,'LUCENE_SEARCH_SERVICE_ERROR_NOTIFICATION',1,1,NULL,NULL),(82,'SWORD_DEPOSIT_NOTIFICATION',0,1,NULL,NULL),(83,'THESIS_ABSTRACT_CONFIRM',0,1,NULL,NULL),(84,'BFR_REVIEW_REMINDER',0,1,256,65536),(85,'BFR_REVIEW_REMINDER_LATE',0,1,256,65536),(86,'BFR_BOOK_ASSIGNED',0,1,256,65536),(87,'BFR_BOOK_DENIED',0,1,256,65536),(88,'BFR_BOOK_REQUESTED',0,1,65536,256),(89,'BFR_BOOK_MAILED',0,1,256,65536),(90,'BFR_REVIEWER_REMOVED',0,1,256,65536),(91,'MANUAL_PAYMENT_NOTIFICATION',0,1,NULL,NULL),(92,'PAYPAL_INVESTIGATE_PAYMENT',0,1,NULL,NULL);
/*!40000 ALTER TABLE `email_templates_default` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templates_default_data`
--

DROP TABLE IF EXISTS `email_templates_default_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templates_default_data` (
  `email_key` varchar(64) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT 'en_US',
  `subject` varchar(120) NOT NULL,
  `body` text,
  `description` text,
  UNIQUE KEY `email_templates_default_data_pkey` (`email_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templates_default_data`
--

LOCK TABLES `email_templates_default_data` WRITE;
/*!40000 ALTER TABLE `email_templates_default_data` DISABLE KEYS */;
INSERT INTO `email_templates_default_data` VALUES ('BFR_BOOK_ASSIGNED','en_US','Book for Review: Book Assigned','Dear {$authorName}:\n\nThis email confirms that {$bookForReviewTitle} has been assigned to you for a book review to be completed by {$bookForReviewDueDate}.\n\nPlease ensure that your mailing address in your online user profile is up-to-date. This address will be used to mail a copy of the book to you for the review.\n\nThe mailing address that we currently have on file is:\n{$authorMailingAddress}\n\nIf this address is incomplete or you are no longer at this address, please use the following user profile URL to update your address:\n\nUser Profile URL: {$userProfileUrl}\n \nTo submit your book review, please log into the journal website and complete the online article submission process.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this book review.\n\n{$editorialContactSignature}','This email is sent by an editor to a book review author when an editor assigns the book for review to the author.'),('BFR_BOOK_DENIED','en_US','Book for Review','Dear {$authorName}:\n\nUnfortunately, I am not able to assign {$bookForReviewTitle} to you at this time for a book review.\n\nI hope you consider reviewing another book from our listing, either at this time or in the future.\n\n{$editorialContactSignature}','This email is sent by an editor to an interested author when a book is no longer available for review.'),('BFR_BOOK_MAILED','en_US','Book for Review: Book Mailed','Dear {$authorName}:\n\nThis email confirms that I have mailed a copy of {$bookForReviewTitle} to the following mailing address from your online user profile:\n{$authorMailingAddress}\n \nTo submit your book review, please log into the journal website and complete the online article submission process.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this book review.\n\n{$editorialContactSignature}','This email is sent by an editor to a book review author when the editor has mailed a copy of the book to the author.'),('BFR_BOOK_REQUESTED','en_US','Book for Review: Book Requested','Dear {$editorName}:\n\nI am interested in writing a book review of {$bookForReviewTitle}.\n\nCan you please confirm whether this book is still available for review?\n\n{$authorContactSignature}','This email is sent to an editor by an author interested in writing a book review for a listed book.'),('BFR_REVIEWER_REMOVED','en_US','Book for Review','Dear {$authorName}:\n\nThis email confirms that you have been removed as the book reviewer for {$bookForReviewTitle}, which will be made available to other authors interested in reviewing the book.\n\nI hope you consider reviewing another book from our listing, either at this time or in the future.\n\n{$editorialContactSignature}','This email is sent by an editor to an interested author when a book is no longer available for review.'),('BFR_REVIEW_REMINDER','en_US','Book for Review: Due Date Reminder','Dear {$authorName}:\n\nThis is a friendly reminder that your book review of {$bookForReviewTitle} is due {$bookForReviewDueDate}.\n\nTo submit your book review, please log into the journal website and complete the online article submission process. For your convenience, a submission URL has been provided below.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this book review.\n\nThank you for your contribution to the journal and I look forward to receiving your submission.\n\n{$editorialContactSignature}','This is an automatically generated email that is sent to a book for review author as a reminder that the due date for the review is approaching.'),('BFR_REVIEW_REMINDER_LATE','en_US','Book for Review: Review Due','Dear {$authorName}:\n\nThis is a friendly reminder that your book review of {$bookForReviewTitle} was due {$bookForReviewDueDate} but has not been received yet.\n\nTo submit your book review, please log into the journal website and complete the online article submission process. For your convenience, a submission URL has been provided below.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this book review.\n\nThank you for your contribution to the journal and I look forward to receiving your submission.\n\n{$editorialContactSignature}','This is an automatically generated email that is sent to a book for review author after the review due date has passed.'),('CITATION_EDITOR_AUTHOR_QUERY','en_US','Citation Editing','{$authorFirstName},\n\nCould you please verify or provide us with the proper citation for the following reference from your article, {$articleTitle}:\n\n{$rawCitation}\n\nThanks!\n\n{$userFirstName}\nCopy-Editor, {$journalName}\n','This email allows copyeditors to request additional information about references from authors.'),('COPYEDIT_ACK','en_US','Copyediting Acknowledgement','{$copyeditorName}:\n\nThank you for copyediting the manuscript, \"{$articleTitle},\" for {$journalName}. It will make an important contribution to the quality of this journal.\n\n{$editorialContactSignature}','This email is sent by the Section Editor to a submission\'s Copyeditor to acknowledge that the Copyeditor has successfully completed the copyediting process and thank them for their contribution.'),('COPYEDIT_ACK','hr_HR','Zaprimljena lektura','PoÅ¡tovana/i {$copyeditorName},\n\nhvala vam Å¡to ste izvrÅ¡ili lekturu rukopisa \"{$articleTitle}\" za Äasopis {$journalName}.\n\nSrdaÄno,\n{$editorialContactSignature}\n','Ovim obrascem e-poÅ¡te urednik rubrike potvrÄ‘uje lektoru primitak lekture.'),('COPYEDIT_AUTHOR_ACK','en_US','Copyediting Review Acknowledgement','{$authorName}:\n\nThank you for reviewing the copyediting of your manuscript, \"{$articleTitle},\" for {$journalName}. We look forward to publishing this work.\n\n{$editorialContactSignature}','This email is sent by the Section Editor to a submission\'s Author to confirm completion of the Author\'s copyediting process and thank them for their contribution.'),('COPYEDIT_AUTHOR_ACK','hr_HR','Zaprimljen pregled lekture','PoÅ¡tovana/i {$authorName},\n\nhvala vam Å¡to ste pregledali lekturu vaÅ¡eg rukopisa \"{$articleTitle}\" za Äasopis {$journalName}. Bit Ä‡e nam zadovoljstvo objaviti ovaj prilog.\n\nSrdaÄno,\n{$editorialContactSignature}\n','Ovim obrascem e-poÅ¡te urednik rubrike potvrÄ‘uje autoru primitak autorove lekture.'),('COPYEDIT_AUTHOR_COMPLETE','en_US','Copyediting Review Completed','{$editorialContactName}:\n\nI have now reviewed the copyediting of the manuscript, \"{$articleTitle},\" for {$journalName}, and it is ready for the final round of copyediting and preparation for Layout.\n\nThank you for this contribution to my work,\n{$authorName}','This email is sent by the Author to the Section Editor to notify them that the Author\'s copyediting process has been completed.'),('COPYEDIT_AUTHOR_COMPLETE','hr_HR','Napravljen pregled lekture','PoÅ¡tovana/i {$editorialContactName},\n\npregled lekture rukopisa \"{$articleTitle}\" za Äasopis {$journalName} je zavrÅ¡en, te je rukopis spreman za zavrÅ¡ni krug lekture i pripremu prijeloma.\n\nSrdaÄno,\n{$authorName}\n','Ovim obrascem e-poÅ¡te autor obavjeÅ¡tava urednika rubrike da je autorski pregled lekture zavrÅ¡en.'),('COPYEDIT_AUTHOR_REQUEST','en_US','Copyediting Review Request','{$authorName}:\n\nYour submission \"{$articleTitle}\" for {$journalName} has been through the first step of copyediting, and is available for you to review by following these steps.\n\n1. Click on the Submission URL below.\n2. Log into the journal and click on the File that appears in Step 1.\n3. Open the downloaded submission.\n4. Review the text, including copyediting proposals and Author Queries.\n5. Make any copyediting changes that would further improve the text.\n6. When completed, upload the file in Step 2.\n7. Click on METADATA to check indexing information for completeness and accuracy.\n8. Send the COMPLETE email to the editor and copyeditor.\n\nSubmission URL: {$submissionCopyeditingUrl}\nUsername: {$authorUsername}\n\nThis is the last opportunity to make substantial copyediting changes to the submission. The proofreading stage, that follows the preparation of the galleys, is restricted to correcting typographical and layout errors.\n\nIf you are unable to undertake this work at this time or have any questions, please contact me. Thank you for your contribution to this journal.\n\n{$editorialContactSignature}','This email is sent by the Section Editor to a submission\'s Author to request that they proofread the work of the copyeditor. It provides access information for the manuscript and warns that this is the last opportunity the author has to make substantial changes.'),('COPYEDIT_AUTHOR_REQUEST','hr_HR','Zamolba za pregled lekture','PoÅ¡tovana/i {$authorName},\n\nupravo smo napravili lekturu vaÅ¡eg priloga \"{$articleTitle}\" za Äasopis {$journalName}. Kako biste pregledali predloÅ¾ene promjene i odgovorili na eventualne upite, molimo vas da otiÄ‘ete na mreÅ¾nu stranicu Äasopisa koristeÄ‡i se dolje navedenom poveznicom. UÄitajte i otvorite datoteku s inicijalnom lekturom. Nakon Å¡to ste pregledali lekturu, u korisniÄkom suÄelju datoteku s vaÅ¡im ispravcima i komentarima priloÅ¾ite pod Korak 2 i odabirom opcije ZAVRÅ ENO obavijestite o tome uredniÅ¡tvo slanjem obrasca e-poÅ¡te.\n\nOvo je posljednja prilika da izvrÅ¡ite neke promjene u vaÅ¡em prilogu. Tekst Ä‡ete moÄ‡i joÅ¡ jednom pregledati u fazi korekture, meÄ‘utim u toj fazi mogu se ispravljati samo manje tiskarske pogreÅ¡ke i pogreÅ¡ke u prijelomu.\n\nURL rukopisa: {$submissionCopyeditingUrl}\nKorisniÄko ime: {$authorUsername}\n\nU sluÄaju da trenutaÄno niste u moguÄ‡nosti pregledati svoj prilog ili ako imate bilo kakvih dodatnih upita, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}\n','Ovim obrascem e-poÅ¡te urednik rubrike Å¡alje autoru priloga zamolbu za pregled lekture. U poruci se autora upuÄ‡uje kako moÅ¾e pristupiti svojem rukopisu te ga se informira da je to posljednja moguÄ‡nost da napravi neke promjene u tekstu.'),('COPYEDIT_COMPLETE','en_US','Copyediting Completed','{$editorialContactName}:\n\nWe have now copyedited your submission \"{$articleTitle}\" for {$journalName}. To review the proposed changes and respond to Author Queries, please follow these steps:\n\n1. Log into the journal using URL below with your username and password (use Forgot link if needed).\n2. Click on the file at 1. Initial Copyedit File to download and open copyedited version.\n3. Review the copyediting, making changes using Track Changes in Word, and answer queries.\n4. Save file to desktop and upload it in 2. Author Copyedit.\n5. Click the email icon under COMPLETE and send email to the editor.\n\nThis is the last opportunity that you have to make substantial changes. You will be asked at a later stage to proofread the galleys, but at that point only minor typographical and layout errors can be corrected.\n\nManuscript URL: {$submissionEditingUrl}\nUsername: {$authorUsername}\n\nIf you are unable to undertake this work at this time or have any questions,\nplease contact me. Thank you for your contribution to this journal.\n\n{$copyeditorName}',''),('COPYEDIT_COMPLETE','hr_HR','Napravljena lektura','PoÅ¡tovana/i {$editorialContactName},\n\nprvi krug lekture rukopisa \"{$articleTitle}\" za Äasopis {$journalName} je zavrÅ¡en. Rukopis je sada spreman da autor i urednik na njemu izvrÅ¡e pregled promjena i upita.\n\nSrdaÄno,\n{$copyeditorName}',''),('COPYEDIT_FINAL_ACK','en_US','Copyediting Final Review Acknowledgement','{$copyeditorName}:\n\nThank you for completing the copyediting of the manuscript, \"{$articleTitle},\" for {$journalName}. This preparation of a \"clean copy\" for Layout is an important step in the editorial process.\n\n{$editorialContactSignature}','This email from the Section Editor to the Copyeditor acknowledges completion of the final round of copyediting and thanks them for their contribution.'),('COPYEDIT_FINAL_ACK','hr_HR','Zaprimljena zavrÅ¡na lektura','PoÅ¡tovana/i {$copyeditorName},\n\nhvala vam Å¡to ste zavrÅ¡ili lekturu rukopisa \"{$articleTitle}\" za Äasopis {$journalName}.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike potvrÄ‘uje  lektoru  zavrÅ¡etak zadnjeg kruga lekture.'),('COPYEDIT_FINAL_COMPLETE','en_US','Copyediting Final Review Completed','{$editorialContactName}:\n\nI have now prepared a clean, copyedited version of the manuscript, \"{$articleTitle},\" for {$journalName}. It is ready for Layout and the preparation of the galleys.\n\n{$copyeditorName}','This email from the Copyeditor to the Section Editor notifies them that the final round of copyediting has been completed and that the layout process may now begin.'),('COPYEDIT_FINAL_COMPLETE','hr_HR','Napravljena zavrÅ¡na lektura','PoÅ¡tovana/i {$editorialContactName},\n\npripremio/la sam Äistu, lektoriranu verziju rukopisa \"{$articleTitle}\" za Äasopis {$journalName}. Rukopis je sada spreman za pripremu prijeloma.\n\nSrdaÄno,\n{$copyeditorName}','Ovim obrascem e-poÅ¡te lektor obavjeÅ¡tava  urednika rubrike da je zadnji krug postupka lekture zavrÅ¡en i da postupak prijeloma moÅ¾e poÄeti.'),('COPYEDIT_FINAL_REQUEST','en_US','Copyediting Final Review','{$copyeditorName}:\n\nThe author and editor have now completed their copyediting review of \"{$articleTitle}\" for {$journalName}. A \"clean copy\" now needs to be prepared for Layout by going through the following steps.\n1. Click on the Submission URL below.\n2. Log into the journal and click on the File that appears in Step 2.\n3. Open the downloaded file and incorporate all copyedits and query responses.\n4. Save clean file, and upload to Step 3 of Copyediting.\n5. Click on METADATA to check indexing information (saving any corrections).\n6. Send the COMPLETE email to the editor.\n\n{$journalName} URL: {$journalUrl}\nSubmission URL: {$submissionCopyeditingUrl}\nUsername: {$copyeditorUsername}\n\n{$editorialContactSignature}','This email from the Section Editor to the Copyeditor requests that they perform a final round of copyediting on a submission before it enters the layout process.'),('COPYEDIT_FINAL_REQUEST','hr_HR','Zamolba za zavrÅ¡nu lekturu','PoÅ¡tovana/i {$copyeditorName},\n\nautor i urednik uÄinili su pregled lekture rukopisa \"{$articleTitle}\" za Äasopis {$journalName}. Temeljem priloÅ¾enih napomena molim vas da izradite konaÄnu, \"Äistu verziju\", koja Ä‡e biti upuÄ‡ena u prijelom.\n\nURL rukopisa: {$submissionCopyeditingUrl}\nKorisniÄko ime: {$copyeditorUsername}\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike od lektora zahtijeva provoÄ‘enje zadnjeg kruga lekture priloga prije prosljeÄ‘ivanja rukopisa u postupak prijeloma.'),('COPYEDIT_REQUEST','en_US','Copyediting Request','{$copyeditorName}:\n\nI would ask that you undertake the copyediting of \"{$articleTitle}\" for {$journalName} by following these steps.\n1. Click on the Submission URL below.\n2. Log into the journal and click on the File that appears in Step 1.\n3. Consult Copyediting Instructions posted on webpage.\n4. Open the downloaded file and copyedit, while adding Author Queries as needed.\n5. Save copyedited file, and upload to Step 1 of Copyediting.\n6. Send the COMPLETE email to the editor.\n\n{$journalName} URL: {$journalUrl}\nSubmission URL: {$submissionCopyeditingUrl}\nUsername: {$copyeditorUsername}\n\n{$editorialContactSignature}','This email is sent by a Section Editor to a submission\'s Copyeditor to request that they begin the copyediting process. It provides information about the submission and how to access it.'),('COPYEDIT_REQUEST','hr_HR','Zamolba za lekturu','PoÅ¡tovana/i {$copyeditorName},\n\nÅ¾eljeli bismo vas zamoliti da prihvatite lekturu rukopisa \"{$articleTitle}\" za Äasopis {$journalName}. Prijavljeni rukopis, kao i upute za lektoriranje moÅ¾ete pronaÄ‡i na mreÅ¾nim stranicama Äasopisa.\n\nURL rukopisa: {$submissionCopyeditingUrl}\nKorisniÄko ime: {$copyeditorUsername}\n\nU sluÄaju da trenutaÄno niste u moguÄ‡nosti preuzeti lekturu ili da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}\n','Ovim obrascem e-poÅ¡te urednik rubrike Å¡alje lektoru zamolbu da zapoÄne s lekturom priloga. Poruka pruÅ¾a osnovne informacije o prilogu i kako mu pristupiti.'),('EDITOR_ASSIGN','en_US','Editorial Assignment','{$editorialContactName}:\n\nThe submission, \"{$articleTitle},\" to {$journalName} has been assigned to you to see through the editorial process in your role as Section Editor.\n\nSubmission URL: {$submissionUrl}\nUsername: {$editorUsername}\n\nThank you,\n{$editorialContactSignature}','This email notifies a Section Editor that the Editor has assigned them the task of overseeing a submission through the editing process. It provides information about the submission and how to access the journal site.'),('EDITOR_ASSIGN','hr_HR','Dodjela uredniÄkog zaduÅ¾enja','{$editorialContactName},\n\nu okviru raspodjele uredniÄkih zaduÅ¾enja za Äasopis {$journalName} vama je dodijeljen zaprimljeni prilog \"{$articleTitle}\" kako biste proveli postupak njegova ureÄ‘ivanja.\n\nURL priloga: {$submissionUrl}\nKorisniÄko ime: {$editorUsername}\n\nUnaprijed hvala,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te glavni urednik obavjeÅ¡tava urednika rubrike da mu je dodijeljen zadatak voÄ‘enja priloga kroz ureÄ‘ivaÄki postupak. Obrazac pruÅ¾a i osnovne informacije o prilogu.'),('EDITOR_DECISION_ACCEPT','en_US','Editor Decision','{$authorName}:\n\nWe have reached a decision regarding your submission to {$journalTitle}, \"{$articleTitle}\".\n\nOur decision is to: Accept Submission\n\n{$editorialContactSignature}\n','This email from the Editor or Section Editor to an Author notifies them of a final \"accept submission\" decision regarding their submission.'),('EDITOR_DECISION_DECLINE','en_US','Editor Decision','{$authorName}:\n\nWe have reached a decision regarding your submission to {$journalTitle}, \"{$articleTitle}\".\n\nOur decision is to: Decline\n\n{$editorialContactSignature}\n','This email from the Editor or Section Editor to an Author notifies them of a final \"decline\" decision regarding their submission.'),('EDITOR_DECISION_RESUBMIT','en_US','Editor Decision','{$authorName}:\n\nWe have reached a decision regarding your submission to {$journalTitle}, \"{$articleTitle}\".\n\nOur decision is: Resubmit\n\n{$editorialContactSignature}\n','This email from the Editor or Section Editor to an Author notifies them of a final \"resubmit\" decision regarding their submission.'),('EDITOR_DECISION_REVISIONS','en_US','Editor Decision','{$authorName}:\n\nWe have reached a decision regarding your submission to {$journalTitle}, \"{$articleTitle}\".\n\nOur decision is: Revisions Required\n\n{$editorialContactSignature}\n','This email from the Editor or Section Editor to an Author notifies them of a final \"revisions required\" decision regarding their submission.'),('EMAIL_LINK','en_US','Article of Possible Interest','Thought you might be interested in seeing \"{$articleTitle}\" by {$authorName} published in Vol {$volume}, No {$number} ({$year}) of {$journalName} at \"{$articleUrl}\".','This email template provides a registered reader with the opportunity to send information about an article to somebody who may be interested. It is available via the Reading Tools and must be enabled by the Journal Manager in the Reading Tools Administration page.'),('EMAIL_LINK','hr_HR','Potencijalno zanimljiv Älanak','SkreÄ‡em vam pozornost na Älanak \"{$articleTitle}\" autora {$authorName} koji je objavljen u godiÅ¡tu {$volume}, broju {$number} ({$year}) Äasopisa {$journalName}, a moÅ¾e se naÄ‡i na \"{$articleUrl}\".','Ovaj obrazac e-poÅ¡te omoguÄ‡uje registriranom Äitatelju da Å¡alje informaciju o Älanku nekome tko je zainteresiran. Ovaj je obrazac dostupan putem alata za Äitanje i njegovu upotrebu mora aktivirati glavni urednik unutar postavki alata za Äitanje meÄ‘u postavkama Äasopisa.'),('GIFT_AVAILABLE','en_US','{$giftNoteTitle}','Dear {$recipientFirstName},\n\n{$buyerFullName} would like to share a gift with you at {$giftJournalName}:\n\n{$giftDetails}\n\n\n{$giftNote}\n\n\nYou will receive a follow-up email that includes login details and instructions for redeeming your gift.\n\nWe hope that you enjoy your gift!\n\n{$giftContactSignature}\n','This email notifies a gift recipient that a gift has been purchased and is available for redemption.'),('GIFT_USER_LOGIN','en_US','Redeem Your Gift: Login Details','Dear {$recipientFirstName},\n\n{$buyerFullName} would like to share a gift with you at {$giftJournalName}:\n\n{$giftDetails}\n\n\nTo redeem your gift, please login to the journal website at {$giftUrl}\n\nYour username: {$username}\n\nWe hope that you enjoy your gift!\n\n{$giftContactSignature}\n','This email notifies a gift recipient of their login details.'),('GIFT_USER_REGISTER','en_US','Redeem Your Gift: Login Details','Dear {$recipientFirstName},\n\n{$buyerFullName} would like to share a gift with you at {$giftJournalName}:\n\n{$giftDetails}\n\n\nTo redeem your gift, please login to the journal website at {$giftUrl}\n\nYour username: {$username}\nYour password: {$password}\n\nOnce logged in, you can change your password at any time.\n\nWe hope that you enjoy your gift!\n\n{$giftContactSignature}\n','This email notifies a gift recipient of their login details for a new account.'),('LAYOUT_ACK','en_US','Layout Acknowledgement','{$layoutEditorName}:\n\nThank you for preparing the galleys for the manuscript, \"{$articleTitle},\" for {$journalName}. This is an important contribution to the publishing process.\n\n{$editorialContactSignature}','This email from the Section Editor to the Layout Editor acknowledges completion of the layout editing process and thanks the layout editor for their contribution.'),('LAYOUT_ACK','hr_HR','Zaprimljen prijelom','PoÅ¡tovana/i {$layoutEditorName},\n\nzahvaljujem vam Å¡to ste pripremili prijelom priloga \"{$articleTitle}\" za Äasopis {$journalName}.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te grafiÄki urednik obavjeÅ¡tava urednika rubrike da je postupak prijeloma zavrÅ¡en.'),('LAYOUT_COMPLETE','en_US','Galleys Complete','{$editorialContactName}:\n\nGalleys have now been prepared for the manuscript, \"{$articleTitle},\" for {$journalName} and are ready for proofreading.\n\nIf you have any questions, please contact me.\n\n{$layoutEditorName}','This email from the Layout Editor to the Section Editor notifies them that the layout process has been completed.'),('LAYOUT_COMPLETE','hr_HR','Napravljen prijelom','PoÅ¡tovana/i {$editorialContactName},\n\nprijelom priloga \"{$articleTitle}\" za Äasopis {$journalName} je zavrÅ¡en te spreman za korekturu.\nU sluÄaju da imate bilo kakvih pitanja molim vas da mi se obratite.\n\nSrdaÄno,\n{$layoutEditorName}\n','Ova e-poÅ¡ta urednika prijeloma uredniku rubrike obavijeÅ¡tava da je proces prijeloma zavrÅ¡en.'),('LAYOUT_REQUEST','en_US','Request Galleys','{$layoutEditorName}:\n\nThe submission \"{$articleTitle}\" to {$journalName} now needs galleys laid out by following these steps.\n1. Click on the Submission URL below.\n2. Log into the journal and use the Layout Version file to create the galleys according to the journal\'s standards.\n3. Send the COMPLETE email to the editor.\n\n{$journalName} URL: {$journalUrl}\nSubmission URL: {$submissionLayoutUrl}\nUsername: {$layoutEditorUsername}\n\nIf you are unable to undertake this work at this time or have any questions, please contact me. Thank you for your contribution to this journal.\n\n{$editorialContactSignature}','This email from the Section Editor to the Layout Editor notifies them that they have been assigned the task of performing layout editing on a submission. It provides information about the submission and how to access it.'),('LAYOUT_REQUEST','hr_HR','Zamolba za prijelom','PoÅ¡tovana/i {$layoutEditorName},\n\nmolim vas da pripremite prijelom priloga \"{$articleTitle}\" za Äasopis {$journalName}.\n\nURL rukopisa: {$submissionLayoutUrl}\nKorisniÄko ime: {$layoutEditorUsername}\n\nU sluÄaju da trenutaÄno niste u moguÄ‡nosti preuzeti ovu obavezu ili ako imate bilo kakvih dodatnih pitanja, molim vas da mi se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike obavjeÅ¡tava grafiÄkog urednika da mu je dodijeljen zadatak  izrade prijeloma priloga.'),('LOCKSS_EXISTING_ARCHIVE','en_US','Archiving Request for {$journalName}','Dear [University Librarian]\n\n{$journalName} <{$journalUrl}>, is a journal for which a member of your faculty, [name of member], serves as a [title of position]. The journal is seeking to establish a LOCKSS (Lots of Copies Keep Stuff Safe) compliant archive with this and other university libraries.\n\n[Brief description of journal]\n\nThe URL to the LOCKSS Publisher Manifest for our journal is: {$journalUrl}/gateway/lockss\n\nWe understand that you are already participating in LOCKSS. If we can provide any additional metadata for purposes of registering our journal with your version of LOCKSS, we would be happy to provide it.\n\nThank you,\n{$principalContactSignature}','This email requests the keeper of a LOCKSS archive to consider including this journal in their archive. It provides the URL to the journal\'s LOCKSS Publisher Manifest.'),('LOCKSS_EXISTING_ARCHIVE','hr_HR','Zamolba za arhiviranje Äasopisa {$journalName}','PoÅ¡tovani [KnjiÅ¾niÄar ustanove],\n\n{$journalName} <{$journalUrl}> je Äasopis s kojim zaposlenik vaÅ¡eg fakulteta [ime zaposlenika] suraÄ‘uje kao [titula]. ÄŒasopis pokuÅ¡ava, u ovoj i drugim knjiÅ¾nicama u sustavu znanosti i visokog obrazovanja, uspostaviti arhivu u skladu s LOCKSS sustavom (Lots of Copies Keep Stuff Safe).\n\n[Kratki opis Äasopisa]\n\nAdresa LOCKSS izdavaÄe izjave za naÅ¡ Äasopis je: {$articleUrl}/gateway/lockss\n\nPrema naÅ¡im spoznajama, vi veÄ‡ sudjelujete u sustavu LOCKSS. Vrlo rado Ä‡emo vam pruÅ¾iti bilo kakve dodatne metapodatke koji bi mogli biti potrebni u svrhu prijave naÅ¡eg Äasopisa unutar vaÅ¡e verzije LOCKSS sustava.\n\nUnaprijed hvala,\n{$principalContactSignature}','Ovaj obrazac e-poÅ¡te skreÄ‡e pozornost osobe nadleÅ¾ne za LOCKSS arhivu da razmotri ukljuÄenje ovog Äasopisa u svoju arhivu. E-poÅ¡ta Å¡alje i URL poveznicu ka izjavi izdavaÄa ovog Äasopisa o koriÅ¡tenju LOCKSS sustava.'),('LOCKSS_NEW_ARCHIVE','en_US','Archiving Request for {$journalName}','Dear [University Librarian]\n\n{$journalName} <{$journalUrl}>, is a journal for which a member of your faculty, [name of member] serves as a [title of position]. The journal is seeking to establish a LOCKSS (Lots of Copies Keep Stuff Safe) compliant archive with this and other university libraries.\n\n[Brief description of journal]\n\nThe LOCKSS Program <http://lockss.org/>, an international library/publisher initiative, is a working example of a distributed preservation and archiving repository, additional details are below. The software, which runs on an ordinary personal computer is free; the system is easily brought on-line; very little ongoing maintenance is required.\n\nTo assist in the archiving of our journal, we invite you to become a member of the LOCKSS community, to help collect and preserve titles produced by your faculty and by other scholars worldwide. To do so, please have someone on your staff visit the LOCKSS site for information on how this system operates. I look forward to hearing from you on the feasibility of providing this archiving support for this journal.\n\nThank you,\n{$principalContactSignature}','This email encourages the recipient to participate in the LOCKSS initiative and include this journal in the archive. It provides information about the LOCKSS initiative and ways to become involved.'),('LOCKSS_NEW_ARCHIVE','hr_HR','Zamolba za arhiviranje Äasopisa {$journalName}','PoÅ¡tovani [KnjiÅ¾niÄar ustanove],\n\n{$journalName} <{$journalUrl}> Äasopis je s kojim zaposlenik vaÅ¡eg fakulteta [ime zaposlenika] suraÄ‘uje kao [titula]. ÄŒasopis pokuÅ¡ava, u ovoj i drugim knjiÅ¾nicama u sustavu znanosti i visokog obrazovanja, uspostaviti arhivu u skladu s LOCKSS sustavom (Lots of Copies Keep Stuff Safe).\n\n[Kratki opis Äasopisa]\n\nMeÄ‘unarodna bibliotekarska/izdavaÄka inicijativa Program LOCKSS <http://lockss.org/> predstavlja funkcionalni primjer distribuiranog repozitorija namijenjenog Äuvanju i arhiviranju sadrÅ¾aja. Dodatne informacije moÅ¾ete proÄitati u nastavku teksta. Potreban software koji se moÅ¾e koristiti i na obiÄnom osobnom raÄunalu je besplatan; sustav se vrlo jednostavno postavlja on-line te zahtijeva vrlo malo kontinuiranog odrÅ¾avanja.\n\nKako biste doprinijeli arhiviranju naÅ¡eg Äasopisa, pozivamo vas da postanete Älan LOCKSS zajednice Äime biste pripomogli u sakupljanju i oÄuvanju naslova koje izdaje vaÅ¡ fakultet i drugi znanstvenici diljem svijeta. Å½elite li se ukljuÄiti, molimo vas da jedan/a od vaÅ¡ih djelatnika/ca posjeti stranicu LOCKSS-a kako bi dobio/la informacije o funkcioniranju sustava. Nadamo se da Ä‡ete nas uskoro kontaktirati u vezi s izvedivoÅ¡Ä‡u pruÅ¾anja ovakve podrÅ¡ke arhiviranju Äasopisa.\n\nUnaprijed hvala,\n{$principalContactSignature}','Ovaj obrazac e-poÅ¡te potiÄe primatelja na sudjelovanje u LOCKSS inicijativi i uvrÅ¡tenje ovog Äasopisa u arhivu. Obrazac pruÅ¾a osnovne informacije o LOCKSS inicijativi i naÄinima ukljuÄivanja.'),('LUCENE_ARTICLE_INDEXING_ERROR_NOTIFICATION','en_US','Article Indexing Error','An indexing error occurred while updating the article index.\n\nThe error message generated by the web service (if any): \"{$error}\"\n\nThis email was generated by Open Journal Systems\' Lucene search plugin.','This email template is used to notify the technical contact\nof a journal that an error occurred during article indexing.'),('LUCENE_JOURNAL_INDEXING_ERROR_NOTIFICATION','en_US','Journal Indexing Error','An indexing error occurred while indexing the journal \"{$journalName}\".\n\nThe error message generated by the web service (if any): \"{$error}\"\n\nThis email was generated by Open Journal Systems\' Lucene search plugin.','This email template is used to notify the technical contact\nof a journal that an error occurred during journal indexing.'),('LUCENE_SEARCH_SERVICE_ERROR_NOTIFICATION','en_US','Journal Search Service Error','An error occurred while someone tried to search the installation \"{$siteName}\".\n\nThe error message generated by the web service (if any): \"{$error}\"\n\nThis email was generated by Open Journal Systems\' Lucene search plugin.','This email template is used to notify the technical contact\nof a journal that an error occurred while trying to access the Solr search service.'),('MANUAL_PAYMENT_NOTIFICATION','en_US','Manual Payment Notification','A manual payment needs to be processed for the journal {$journalName} and the user {$userFullName} (username \"{$userName}\").\n\nThe item being paid for is \"{$itemName}\".\nThe cost is {$itemCost} ({$itemCurrencyCode}).\n\nThis email was generated by Open Journal Systems\' Manual Payment plugin.','This email template is used to notify a journal manager contact that a manual payment was requested.'),('NOTIFICATION','en_US','New notification from {$siteTitle}','You have a new notification from {$siteTitle}:\n\n{$notificationContents}\n\nLink: {$url}\n\n{$principalContactSignature}','The email is sent to registered users that have selected to have this type of notification emailed to them.'),('NOTIFICATION_MAILLIST','en_US','New notification from {$journalName}','You have a new notification from {$journalName}:\n--\n{$notificationContents}\n\nLink: {$url}\n--\n\nIf you wish to stop receiving notification emails, please go to {$unsubscribeLink}.\n\n{$principalContactSignature}','This email is sent to unregistered users on the notification mailing list.'),('NOTIFICATION_MAILLIST_WELCOME','en_US','Welcome to the the {$journalName} mailing list!','You have signed up to receive notifications from {$journalName}.\n\nPlease click on this link to confirm your request and add your email address to the mailing list: {$confirmLink}\n\nIf you wish to stop receiving notification emails, please go to {$unsubscribeLink}.\n\n{$principalContactSignature}','This email is sent to an unregistered user who just registered with the notification mailing list.'),('OFR_OBJECT_ASSIGNED','en_US','Object for Review: Object Assigned','Dear {$authorName}:\n\nThis email confirms that {$objectForReviewTitle} has been assigned to you for an object review to be completed by {$objectForReviewDueDate}.\n\nPlease ensure that your mailing address in your online user profile is up-to-date. This address will be used to mail a copy of the object to you for the review.\n\nThe mailing address that we currently have on file is:\n{$authorMailingAddress}\n\nIf this address is incomplete or you are no longer at this address, please use the following user profile URL to update your address:\n\nUser Profile URL: {$userProfileUrl}\n \nTo submit your object review, please log into the journal website and complete the online article submission process.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this object review.\n\n{$editorialContactSignature}','This email is sent by an editor to an object review author when an editor assigns the object for review to the author.'),('OFR_OBJECT_DENIED','en_US','Object for Review','Dear {$authorName}:\n\nUnfortunately, I am not able to assign {$objectForReviewTitle} to you at this time for an object review.\n\nI hope you consider reviewing another object from our listing, either at this time or in the future.\n\n{$editorialContactSignature}','This email is sent by an editor to an interested author when an object is no longer available for review.'),('OFR_OBJECT_MAILED','en_US','Object for Review: Object Mailed','Dear {$authorName}:\n\nThis email confirms that I have mailed a copy of {$objectForReviewTitle} to the following mailing address from your online user profile:\n{$authorMailingAddress}\n \nTo submit your object review, please log into the journal website and complete the online article submission process.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this object review.\n\n{$editorialContactSignature}','This email is sent by an editor to an object review author when the editor has mailed a copy of the object to the author.'),('OFR_OBJECT_REQUESTED','en_US','Object for Review: Object Requested','Dear {$editorName}:\n\nI am interested in writing an object review of {$objectForReviewTitle}.\n\nCan you please confirm whether this object is still available for review?\n\n{$authorContactSignature}','This email is sent to an editor by an author interested in writing an object review for a listed object.'),('OFR_REVIEWER_REMOVED','en_US','Object for Review','Dear {$authorName}:\n\nThis email confirms that you have been removed as the object reviewer for {$objectForReviewTitle}.\n\nI hope you consider reviewing another object from our listing, either at this time or in the future.\n\n{$editorialContactSignature}','This email is sent by an editor to an interested author when an object is no longer available for review.'),('OFR_REVIEW_REMINDER','en_US','Object for Review: Due Date Reminder','Dear {$authorName}:\n\nThis is a friendly reminder that your object review of {$objectForReviewTitle} is due {$objectForReviewDueDate}.\n\nTo submit your object review, please log into the journal website and complete the online article submission process. For your convenience, a submission URL has been provided below.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this object review.\n\nThank you for your contribution to the journal and I look forward to receiving your submission.\n\n{$editorialContactSignature}','This is an automatically generated email that is sent to an object for review author as a reminder that the due date for the review is approaching.'),('OFR_REVIEW_REMINDER_LATE','en_US','Object for Review: Review Due','Dear {$authorName}:\n\nThis is a friendly reminder that your object review of {$objectForReviewTitle} was due {$objectForReviewDueDate} but has not been received yet.\n\nTo submit your object review, please log into the journal website and complete the online article submission process. For your convenience, a submission URL has been provided below.\n\nSubmission URL: {$submissionUrl}\n\nPlease feel free to contact me if you have any questions or concerns about this object review.\n\nThank you for your contribution to the journal and I look forward to receiving your submission.\n\n{$editorialContactSignature}','This is an automatically generated email that is sent to an object for review author after the review due date has passed.'),('OPEN_ACCESS_NOTIFY','en_US','Issue Now Open Access','Readers:\n\n{$journalName} has just made available in an open access format the following issue. We invite you to review the Table of Contents here and then visit our web site ({$journalUrl}) to review articles and items of interest.\n\nThanks for the continuing interest in our work,\n{$editorialContactSignature}','This email is sent to registered readers who have requested to receive a notification email when an issue becomes open access.'),('OPEN_ACCESS_NOTIFY','hr_HR','Broj dostupan pod uvjetima otvorenog pristupa','Ovaj broj Äasopisa {$journalName} od sada je u cijelosti dostupan svim Äitateljima pod uvjetima otvorenog pristupa. Pozivamo vas da pregledate kazalo sadrÅ¾aja i potom posjetite naÅ¡u mreÅ¾nu stranicu ({$journalUrl}) gdje moÅ¾ete bez ograniÄenja pregledati sve Älanke i priloge koji vas zanimaju.\n\nHvala vam na zanimanju za naÅ¡ rad,\n{$editorialContactSignature}','Ovaj obrazac e-poÅ¡te Å¡alje se registriranim Äitateljima koji su zatraÅ¾ili primanje obavijesti e-poÅ¡tom kada broj Äasopisa postane dostupan pod uvjetima otvorenog pristupa.'),('PASSWORD_RESET','en_US','Password Reset','Your password has been successfully reset for use with the {$siteTitle} web site. Please retain this username and password, as it is necessary for all work with the journal.\n\nYour username: {$username}\nYour new password: {$password}\n\n{$principalContactSignature}','This email is sent to a registered user when they have successfully reset their password following the process described in the PASSWORD_RESET_CONFIRM email.'),('PASSWORD_RESET','hr_HR','Promjena lozinke','VaÅ¡a lozinka za mreÅ¾nu stranicu {$siteTitle} je uspjeÅ¡no promijenjena. Molimo vas da pohranite vaÅ¡e korisniÄko ime i lozinku jer su oni nuÅ¾ni za sve aktivnosti vezane uz Äasopis.\n\nVaÅ¡e korisniÄko ime: {$username}\nVaÅ¡a nova lozinka: {$password}\n\n{$principalContactSignature}','Ovaj obrazac e-poÅ¡te Å¡alje se registriranim korisnicima nakon Å¡to  uspjeÅ¡no ponovno postave  svoju  lozinku slijedeÄ‡i postupak koji je opisan u PASSWORD_RESET_CONFIRM.'),('PASSWORD_RESET_CONFIRM','en_US','Password Reset Confirmation','We have received a request to reset your password for the {$siteTitle} web site.\n\nIf you did not make this request, please ignore this email and your password will not be changed. If you wish to reset your password, click on the below URL.\n\nReset my password: {$url}\n\n{$principalContactSignature}','This email is sent to a registered user when they indicate that they have forgotten their password or are unable to login. It provides a URL they can follow to reset their password.'),('PASSWORD_RESET_CONFIRM','hr_HR','Potvrda o promjeni lozinke','Zaprimili smo vaÅ¡ zahtjev za promjenu lozinke za mreÅ¾nu stranicu {$siteTitle}.\n\nU sluÄaju da takav zahtjev niste poslali, molimo vas da ignorirate ovu e-poÅ¡tu i vaÅ¡a Ä‡e lozinka ostati nepromijenjena. U sluÄaju da Å¾elite promijeniti lozinku, molimo vas da kliknete na dolje priloÅ¾enu poveznicu.\n\nPromjena lozinke: {$url}\n\n{$principalContactSignature}','Ovaj obrazac e-poÅ¡te Å¡alje se registriranim korisnicima kada informiraju sustav da su zaboravili svoju lozinku ili da se ne mogu prijaviti u sustav. U poruci se nalazi URL koji mogu slijediti kao bi postavili svoju novu lozinku.'),('PAYPAL_INVESTIGATE_PAYMENT','en_US','Unusual PayPal Activity','Open Journal Systems has encountered unusual activity relating to PayPal payment support for the journal {$journalName}. This activity may need further investigation or manual intervention.\n                       \nThis email was generated by Open Journal Systems\' PayPal plugin.\n\nFull post information for the request:\n{$postInfo}\n\nAdditional information (if supplied):\n{$additionalInfo}\n\nServer vars:\n{$serverVars}\n','This email template is used to notify a journal\'s primary contact that suspicious activity or activity requiring manual intervention was encountered by the PayPal plugin.'),('PROOFREAD_ACK','en_US','Proofreading Acknowledgement','{$proofreaderName}:\n\nThank you for proofreading the galleys for the manuscript, \"{$articleTitle},\" for {$journalName}. This work makes an important contribution to the quality of this journal.\n\n{$editorialContactSignature}','This email from the Section Editor to the Proofreader confirms completion of the proofreader\'s proofreading process and thanks them for their contribution.'),('PROOFREAD_ACK','hr_HR','Zaprimljena korektura','PoÅ¡tovana/i {$proofreaderName},\n\nzahvaljujem vam na korekturi prijeloma priloga \"{$articleTitle}\" za Äasopis {$journalName}.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike potvrÄ‘uje korektoru zaprimanje korekture.'),('PROOFREAD_AUTHOR_ACK','en_US','Proofreading Acknowledgement (Author)','{$authorName}:\n\nThank you for proofreading the galleys for your manuscript, \"{$articleTitle},\" in {$journalName}. We are looking forward to publishing your work shortly.\n\nIf you subscribe to our notification service, you will receive an email of the Table of Contents as soon as it is published. If you have any questions, please contact me.\n\n{$editorialContactSignature}','This email from the Section Editor to the Author acknowledges completion of the initial proofreading process and thanks them for their contribution.'),('PROOFREAD_AUTHOR_ACK','hr_HR','Zaprimljena korektura (Autor)','PoÅ¡tovana/i {$authorName},\n\nzahvaljujemo vam na korekturi prijeloma vaÅ¡eg priloga \"{$articleTitle}\" za Äasopis {$journalName}. Bit Ä‡e nam zadovoljstvo uskoro objaviti vaÅ¡ rad.\n\nAko se predbiljeÅ¾ite za naÅ¡ sustav obavjeÅ¡tavanja, dobivat Ä‡ete e-poÅ¡tu sadrÅ¾aja broja Äim se on objavi. U sluÄaju da imate bilo kakva dodatna pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike potvrÄ‘uje autoru primitak korekture.'),('PROOFREAD_AUTHOR_COMPLETE','en_US','Proofreading Completed (Author)','{$editorialContactName}:\n\nI have completed proofreading the galleys for my manuscript, \"{$articleTitle},\" for {$journalName}. The galleys are now ready to have any final corrections made by the Proofreader and Layout Editor.\n\n{$authorName}','This email from the Author to the Proofreader and Editor notifies them that the Author\'s round of proofreading is complete and that details can be found in the article comments.'),('PROOFREAD_AUTHOR_COMPLETE','hr_HR','Napravljena korektura (Autor)','PoÅ¡tovana/i {$editorialContactName},\n\nkorektura prijeloma mog priloga \"{$articleTitle}\" za Äasopis {$journalName} je napravljena. Prijelom je sada spreman za zavrÅ¡ne ispravke korektora.\n\nSrdaÄno,\n{$authorName}','Ovim obrascem e-poÅ¡te autor obavjeÅ¡tava korektora i urednika zavrÅ¡io autorsku korekturu. Autorski ispravci mogu se pronaÄ‡i u komentarima Älanka.'),('PROOFREAD_AUTHOR_REQUEST','en_US','Proofreading Request (Author)','{$authorName}:\n\nYour submission \"{$articleTitle}\" to {$journalName} now needs to be proofread by folllowing these steps.\n1. Click on the Submission URL below.\n2. Log into the journal and view PROOFING INSTRUCTIONS\n3. Click on VIEW PROOF in Layout and proof the galley in the one or more formats used.\n4. Enter corrections (typographical and format) in Proofreading Corrections.\n5. Save and email corrections to Layout Editor and Proofreader.\n6. Send the COMPLETE email to the editor.\n\nSubmission URL: {$submissionUrl}\nUsername: {$authorUsername}\n\n{$editorialContactSignature}','This email from the Section Editor to the Author notifies them that an article\'s galleys are ready for proofreading. It provides information about the article and how to access it.'),('PROOFREAD_AUTHOR_REQUEST','hr_HR','Zahtjev za korekturu (Autor)','PoÅ¡tovana/i {$authorName},\n\nmolimo vas da izvrÅ¡ite korekturu prijeloma vaÅ¡eg priloga \"{$articleTitle}\" za Äasopis {$journalName}. Kako biste pristupili radnom primjerku prijeloma, molimo vas da otiÄ‘ete na mreÅ¾nu stranicu Äasopisa koristeÄ‡i se poveznicom koja se nalazi u nastavku teksta. Koristite poveznicu VIEW PROOF kako biste pregledali postoje li tiskarske pogreÅ¡ke i greÅ¡ke u prijelomu u tekstu oblikovanom za objavljivanje. Ispravke zabiljeÅ¾ite unutar okvira Korektorski ispravci, koristeÄ‡i se priloÅ¾enim uputama za ispravke.\n\nURL Rukopisa: {$submissionUrl}\nKorisniÄko ime: {$authorUsername}\n\nU sluÄaju da trenutaÄno niste u moguÄ‡nosti izraditi korekturu svog priloga ili ako imate bilo kakvih dodatnih pitanja, molim vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike obavjeÅ¡tava autora da je prijelom Älanka spreman za korekturu. Poruka ukljuÄuje informacije o Älanku i kako mu pristupiti.'),('PROOFREAD_COMPLETE','en_US','Proofreading Completed','{$editorialContactName}:\n\nI have completed proofreading the galleys for the manuscript, \"{$articleTitle},\" for {$journalName}. The galleys are now ready to have any final corrections made by the Layout Editor.\n\n{$proofreaderName}','This email from the Proofreader to the Section Editor notifies them that the Proofreader has completed the proofreading process.'),('PROOFREAD_COMPLETE','hr_HR','Napravljena korektura','PoÅ¡tovana/i {$editorialContactName},\n\nkorektura prijeloma priloga \"{$articleTitle}\" za Äasopis {$journalName} je napravljena. Prijelom je spreman za unos zavrÅ¡nih ispravaka od strane grafiÄkog urednika.\n\nSrdaÄno,\n{$proofreaderName}','Ovim obrascem e-poÅ¡te korektor obavjeÅ¡tava urednika rubrike da je zavrÅ¡io postupak korekture.'),('PROOFREAD_LAYOUT_ACK','en_US','Proofreading Acknowledgement (Layout Editor)','{$layoutEditorName}:\n\nThank you for completing the proofreading corrections for the galleys associated with the manuscript, \"{$articleTitle},\" for {$journalName}. This represents an important contribution to the work of this journal.\n\n{$editorialContactSignature}','This email from the Section Editor to the Layout Editor acknowledges completion of the final stage of proofreading and thanks them for their contribution.'),('PROOFREAD_LAYOUT_ACK','hr_HR','Zaprimljena korektura (grafiÄki urednik)','PoÅ¡tovana/i {$layoutEditorName},\n\nhvala vam Å¡to ste zavrÅ¡ili unos korektura u prijelom priloga \"{$articleTitle}\" za Äasopis {$journalName}.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike potvrÄ‘uje grafiÄkom uredniku da je zaprimio prijelom sa unesenim  korekturama.'),('PROOFREAD_LAYOUT_COMPLETE','en_US','Proofreading Completed (Layout Editor)','{$editorialContactName}:\n\nThe galleys have now been corrected, following their proofreading, for the manuscript, \"{$articleTitle},\" for {$journalName}. This piece is now ready to publish.\n\n{$layoutEditorName}','This email from the Layout Editor to the Section Editor notifies them that the final stage of proofreading has been completed and the article is now ready to publish.'),('PROOFREAD_LAYOUT_COMPLETE','hr_HR','Napravljena korektura (grafiÄki urednik)','PoÅ¡tovana/i {$editorialContactName},\n\nprijelom priloga \"{$articleTitle}\" za Äasopis {$journalName} ispravljen je prema priloÅ¾enim korektorskim uputama. ÄŒlanak je sada spreman za objavljivanje.\n\nSrdaÄno,\n{$layoutEditorName}','Ovim obrascem e-poÅ¡te grafiÄki urednik obavjeÅ¡tava urednika rubrike da je unos korekture zavrÅ¡en i da je Älanak spreman za objavljivanje.'),('PROOFREAD_LAYOUT_REQUEST','en_US','Proofreading Request (Layout Editor)','{$layoutEditorName}:\n\nThe submission \"{$articleTitle}\" to {$journalName} has been proofread by the author and proofreader, and any corrections should now be made by following these steps.\n1. Click on the Submission URL below.\n2. Log into the journal consult Proofreading Corrections to create corrected galleys.\n3. Upload the revised galleys.\n4. Send the COMPLETE email in Proofreading Step 3 to the editor.\n\n{$journalName} URL: {$journalUrl}\nSubnmission URL: {$submissionUrl}\nUsername: {$layoutEditorUsername}\n\nIf you are unable to undertake this work at this time or have any questions, please contact me. Thank you for your contribution to this journal.\n\n{$editorialContactSignature}','This email from the Section Editor to the Layout Editor notifies them that an article\'s galleys are ready for final proofreading. It provides information on the article and how to access it.'),('PROOFREAD_LAYOUT_REQUEST','hr_HR','Zamolba za unos korekture (grafiÄki urednik)','PoÅ¡tovana/i {$layoutEditorName},\n\nmolimo vas da izvrÅ¡ite potrebne ispravke u prijelomu priloga \"{$articleTitle}\" za Äasopis {$journalName} u skladu s priloÅ¾enim korekturama.\n\nURL priloga: {$submissionUrl}\nKorisniÄko ime: {$layoutEditorUsername}\n\nU sluÄaju da trenutaÄno niste u moguÄ‡nosti izvrÅ¡iti ove unose ili ako imate bilo kakva dodatna pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike obavjeÅ¡tava grafiÄkog urednika da su korekture inicijalnog prijeloma Älanka izraÄ‘ene i spremne za unos. Poruka daje osnovne informacije o Älanku i kako mu pristupiti.'),('PROOFREAD_REQUEST','en_US','Proofreading Request','{$proofreaderName}:\n\nThe submission \"{$articleTitle}\" to {$journalName} now needs to be proofread by following these steps.\n1. Click on the Submission URL below.\n2. Log into the journal and view PROOFING INSTRUCTIONS.\n3. Click on VIEW PROOF in Layout and proof the galley in the one or more formats used.\n4. Enter corrections (typographical and format) in Proofreading Corrections.\n5. Save and email corrections to Layout Editor.\n6. Send the COMPLETE email to the editor.\n\nManuscript URL: {$submissionUrl}\nUsername: {$proofreaderUsername}\n\nIf you are unable to undertake this work at this time or have any questions, please contact me. Thank you for your contribution to this journal.\n\n{$editorialContactSignature}','This email from the Section Editor to the Proofreader requests that they perform proofreading of an article\'s galleys. It provides information about the article and how to access it.'),('PROOFREAD_REQUEST','hr_HR','Zamolba za korekturu','PoÅ¡tovana/i {$proofreaderName},\n\nmolim vas da izvrÅ¡ite korekturu prijeloma priloga \"{$articleTitle}\" za Äasopis {$journalName}.\n\nURL Rukopisa: {$submissionUrl}\nKorisniÄko ime: {$proofreaderUsername}\n\nU sluÄaju da trenutaÄno niste u moguÄ‡nosti preuzeti ovu korekturu ili u sluÄaju da imate bilo kakvih pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike Å¡alje korektoru zamolbu za korekturu prijeloma Älanka. Poruka daje osnovne informacije o Älanku i kako mu pristupiti.'),('PUBLISH_NOTIFY','en_US','New Issue Published','Readers:\n\n{$journalName} has just published its latest issue at {$journalUrl}. We invite you to review the Table of Contents here and then visit our web site to review articles and items of interest.\n\nThanks for the continuing interest in our work,\n{$editorialContactSignature}','This email is sent to registered readers via the \"Notify Users\" link in the Editor\'s User Home. It notifies readers of a new issue and invites them to visit the journal at a supplied URL.'),('PUBLISH_NOTIFY','hr_HR','Objavljen novi broj','PoÅ¡tovani Äitatelji,\n\nupravo je objavljen novi broj Äasopisa {$journalName} koji je dostupan na adresi {$journalUrl}. Pozivamo vas da pregledate sadrÅ¾aj broja i posjetite naÅ¡u mreÅ¾nu stranicu kako bi proÄitali vama zanimljive Älanke i druge priloge.\n\nHvala vam na interesu za naÅ¡ rad,\n{$editorialContactSignature}','Ovaj obrazac e-poÅ¡te Å¡alje se registriranim Äitateljima kroz opciju \"Obavijesti korisnika\" na poÄetnom urednikovom izborniku. ÄŒitatelji se njome obavjeÅ¡tavaju o izlasku novog broja Äasopisa i pozivaju se da posjete stranice Äasopisa na priloÅ¾enom URL-u.'),('REVIEWER_REGISTER','en_US','Registration as Reviewer with {$journalName}','In light of your expertise, we have taken the liberty of registering your name in the reviewer database for {$journalName}. This does not entail any form of commitment on your part, but simply enables us to approach you with a submission to possibly review. On being invited to review, you will have an opportunity to see the title and abstract of the paper in question, and you\'ll always be in a position to accept or decline the invitation. You can also ask at any point to have your name removed from this reviewer list.\n\nWe are providing you with a username and password, which is used in all interactions with the journal through its website. You may wish, for example, to update your profile, including your reviewing interests.\n\nUsername: {$username}\nPassword: {$password}\n\nThank you,\n{$principalContactSignature}','This email is sent to a newly registered reviewer to welcome them to the system and provide them with a record of their username and password.'),('REVIEWER_REGISTER','hr_HR','Registrirani ste kao recenzent Äasopisa {$journalName}','ImajuÄ‡i u vidu vaÅ¡e podruÄje ekspertize, odluÄili smo registrirati vas u bazu recenzenata Äasopisa {$journalName}. Ovo vas ne obvezuje ni na koji naÄin, veÄ‡ samo omoguÄ‡ava uredniÅ¡tvu da vas kontaktira sa informacijama o prilozima koje biste potencijalno mogli recenzirati. Po zaprimljenom pozivu za recenziju, bit Ä‡ete u moguÄ‡nosti pregledati naslov i saÅ¾etak konkretnog rada Äiju recenziju predlaÅ¾emo, te Ä‡ete uvijek biti u moguÄ‡nosti prihvatiti ili odbiti rencenzijsko zaduÅ¾enje. TakoÄ‘er, u bilo kojem trenutku moÅ¾ete zatraÅ¾iti da uklonimo vaÅ¡e ime iz baze recenzenata i zatvorimo vaÅ¡ korisniÄki raÄun.\n\nOvdje vam prilaÅ¾emo vaÅ¡e korisniÄko ime i lozinku, koja vam je potrebna za rad sa Äasopisom kroz naÅ¡ sustav za elektroniÄko ureÄ‘ivanje. U njemu moÅ¾ete i dopuniti svoje korisniÄke detalje (npr. recenzentske interese).\n\nKorisniÄko ime: {$username}\nLozinka: {$password}\n\nSrdaÄno,\n{$principalContactSignature}','Ova se poruka Å¡alje recenzentima koje registriraju urednici. Njome se novoregistriranom recenzentu Å¾eli dobrodoÅ¡lica te pruÅ¾aju informacije o korisniÄkom imenu i lozinki.'),('REVIEW_ACK','en_US','Article Review Acknowledgement','{$reviewerName}:\n\nThank you for completing the review of the submission, \"{$articleTitle},\" for {$journalName}. We appreciate your contribution to the quality of the work that we publish.\n\n{$editorialContactSignature}','This email is sent by a Section Editor to confirm receipt of a completed review and thank the reviewer for their contributions.'),('REVIEW_ACK','hr_HR','Zaprimljena recenzija Älanka','PoÅ¡tovana/i {$reviewerName},\n\nhvala vam Å¡to ste izradili recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName}. Cijenimo vaÅ¡ doprinos kvaliteti radova objavljenih u naÅ¡em Äasopisu.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te  urednik rubrike potvrÄ‘uje recenzentu primitak zavrÅ¡ene recenzije.'),('REVIEW_CANCEL','en_US','Request for Review Cancelled','{$reviewerName}:\n\nWe have decided at this point to cancel our request for you to review the submission, \"{$articleTitle},\" for {$journalName}. We apologize for any inconvenience this may cause you and hope that we will be able to call on you to assist with this journal\'s review process in the future.\n\nIf you have any questions, please contact me.\n\n{$editorialContactSignature}','This email is sent by the Section Editor to a Reviewer who has a submission review in progress to notify them that the review has been cancelled.'),('REVIEW_CANCEL','hr_HR','PovlaÄenje zamolbe za recenziju','PoÅ¡tovana/i {$reviewerName},\n\ns obzirom na okolnosti, odluÄili smo povuÄ‡i zamolbu da izvrÅ¡ite recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName}. Nadamo se da Ä‡emo vam se u buduÄ‡nosti ponovno moÄ‡i obratiti da vaÅ¡om recenzijom pridonesete ovom Äasopisu.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike recenzenta obavjeÅ¡tava o povlaÄenju zahtjeva za izradu recenzije za koju je prethodno recenzent bio zaduÅ¾en ili koja je recenzentu bila ponuÄ‘ena.'),('REVIEW_COMPLETE','en_US','Article Review Completed','{$editorialContactName}:\n\nI have now completed my review of \"{$articleTitle}\" for {$journalName}, and submitted my recommendation, \"{$recommendation}.\"\n\n{$reviewerName}','This email is sent by a Reviewer to the Section Editor to notify them that a review has been completed and the comments and recommendations have been recorded on the journal web site.'),('REVIEW_COMPLETE','hr_HR','IzraÄ‘ena recenzija Älanka','PoÅ¡tovana/i {$editorialContactName},\n\nupravo sam zavrÅ¡io/la recenziju Älanka\"{$articleTitle}\" za Äasopis {$journalName} i predao/la svoju preporuku: {$recommendation}.\n\nSrdaÄno,\n{$reviewerName}','Ovim obrascem e-poÅ¡te recenzent obavjeÅ¡tava urednika rubrike da je recenzija izraÄ‘ena i da su komentari i preporuke evidentirani na mreÅ¾noj stranici Äasopisa.'),('REVIEW_CONFIRM','en_US','Able to Review','{$editorialContactName}:\n\nI am able and willing to review the submission, \"{$articleTitle},\" for {$journalName}. Thank you for thinking of me, and I plan to have the review completed by its due date, {$reviewDueDate}, if not before.\n\n{$reviewerName}','This email is sent by a Reviewer to the Section Editor in response to a review request to notify the Section Editor that the review request has been accepted and will be completed by the specified date.'),('REVIEW_CONFIRM','hr_HR','U moguÄ‡nosti sam izvrÅ¡iti recenziju','PoÅ¡tovana/i {$editorialContactName},\n\nu moguÄ‡nosti sam izvrÅ¡iti recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName}. Recenziju namjeravam izvrÅ¡iti  unutar dogovorenog vremenskog roka, {$reviewDueDate}.\n\nSrdaÄno,\n{$reviewerName}','Ovim obrascem e-poÅ¡te recenzent potvrÄ‘uje uredniku rubrike da prihvaÄ‡a zahtjev za recenzijom.'),('REVIEW_DECLINE','en_US','Unable to Review','{$editorialContactName}:\n\nI am afraid that at this time I am unable to review the submission, \"{$articleTitle},\" for {$journalName}. Thank you for thinking of me, and another time feel free to call on me.\n\n{$reviewerName}','This email is sent by a Reviewer to the Section Editor in response to a review request to notify the Section Editor that the review request has been declined.'),('REVIEW_DECLINE','hr_HR','Nisam u moguÄ‡nosti izvrÅ¡iti recenziju','PoÅ¡tovana/i {$editorialContactName},\n\nnaÅ¾alost, u ovom trenutku nisam u moguÄ‡nosti izvrÅ¡iti recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName}. Hvala vam Å¡to ste me predloÅ¾ili za recenzenta, i molim vas da mi se svakako ponovno obratite u buduÄ‡nosti.\n\nSrdaÄno,\n{$reviewerName}','Ovim obrascem e-poÅ¡te recenzent odgovara uredniku rubrike da ne prihvaÄ‡a zahtjev za recenzijom.'),('REVIEW_REMIND','en_US','Submission Review Reminder','{$reviewerName}:\n\nJust a gentle reminder of our request for your review of the submission, \"{$articleTitle},\" for {$journalName}. We were hoping to have this review by {$reviewDueDate}, and would be pleased to receive it as soon as you are able to prepare it.\n\nIf you do not have your username and password for the journal\'s web site, you can use this link to reset your password (which will then be emailed to you along with your username). {$passwordResetUrl}\n\nSubmission URL: {$submissionReviewUrl}\n\nPlease confirm your ability to complete this vital contribution to the work of the journal. I look forward to hearing from you.\n\n{$editorialContactSignature}','This email is sent by a Section Editor to remind a reviewer that their review is due.'),('REVIEW_REMIND','hr_HR','Podsjetnik za predaju Recenzije','PoÅ¡tovana/i {$reviewerName},\n\nÅ¾eljeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName} istekao {$reviewDueDate}. Bilo bi nam izuzetno drago ukoliko biste recenziju zavrÅ¡ili i predali Å¡to je prije moguÄ‡e.\n\nU sluÄaju da nemate pri ruci svoje korisniÄko ime ili lozinku za mreÅ¾nu stranicu Äasopisa, moÅ¾ete se koristi ovom poveznicom kako biste promijenili lozinku (koju Ä‡emo vam tada, zajedno s korisniÄkim imenom, poslati putem e-poÅ¡te). {$passwordResetUrl}\n\nURL Älanka: {$submissionReviewUrl}\n\nMolimo vas da nas izvijestite u kojem ste roku u moguÄ‡nosti izraditi recenziju. Nadamo se skorom odgovoru.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike podsjeÄ‡a recenzenta da rok za izradu recenzije istekao.'),('REVIEW_REMIND_AUTO','en_US','Automated Submission Review Reminder','{$reviewerName}:\n\nJust a gentle reminder of our request for your review of the submission, \"{$articleTitle},\" for {$journalName}. We were hoping to have this review by {$reviewDueDate}, and this email has been automatically generated and sent with the passing of that date. We would still be pleased to receive it as soon as you are able to prepare it.\n\nIf you do not have your username and password for the journal\'s web site, you can use this link to reset your password (which will then be emailed to you along with your username). {$passwordResetUrl}\n\nSubmission URL: {$submissionReviewUrl}\n\nPlease confirm your ability to complete this vital contribution to the work of the journal. I look forward to hearing from you.\n\n{$editorialContactSignature}','This email is automatically sent when a reviewer\'s due date elapses (see Review Options under Journal Setup, Step 2) and one-click reviewer access is disabled. Scheduled tasks must be enabled and configured (see the site configuration file).'),('REVIEW_REMIND_AUTO','hr_HR','Automatski podsjetnik za predaju recenzije','PoÅ¡tovana/i {$reviewerName},\n\nÅ¾eljeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName} istekao. Nadali smo se da Ä‡e recenzija biti gotova do {$reviewDueDate}. Ova poruka se automatski Å¡alje nakon prolaska tog datuma. Molimo vas da nam recenziju poÅ¡aljete u najskorijem roku.\n\nU sluÄaju da nemate pri ruci svoje korisniÄko ime ili lozinku za mreÅ¾nu stranicu Äasopisa, moÅ¾ete se koristiti ovom poveznicom kako biste promijenili lozinku (koju Ä‡emo vam tada, zajedno s korisniÄkim imenom, poslati putem e-poÅ¡te). {$passwordResetUrl}\n\nURL Älanka: {$submissionReviewUrl}\n\nMolimo vas da nas izvijestite u kojem ste roku u moguÄ‡nosti izraditi recenziju. Nadamo se skorom odgovoru.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovaj se obrazac e-poÅ¡te automatski Å¡alje recenzentu kada datum naveden kao rok za izradu recenzije istekao (pogledajte Opcije recenzije unutar Postavljanja Äasopisa, 2. korak), a recenzentu nije omoguÄ‡en pristup jednim klikom. Za ovu funkciju RasporeÄ‘eni zadaci moraju biti aktivirani i namjeÅ¡teni (pogledajte konfiguracijsku datoteku stranice).'),('REVIEW_REMIND_AUTO_ONECLICK','en_US','Automated Submission Review Reminder','{$reviewerName}:\n\nJust a gentle reminder of our request for your review of the submission, \"{$articleTitle},\" for {$journalName}. We were hoping to have this review by {$reviewDueDate}, and this email has been automatically generated and sent with the passing of that date. We would still be pleased to receive it as soon as you are able to prepare it.\n\nSubmission URL: {$submissionReviewUrl}\n\nPlease confirm your ability to complete this vital contribution to the work of the journal. I look forward to hearing from you.\n\n{$editorialContactSignature}','This email is automatically sent when a reviewer\'s due date elapses (see Review Options under Journal Setup, Step 2) and one-click reviewer access is enabled. Scheduled tasks must be enabled and configured (see the site configuration file).'),('REVIEW_REMIND_AUTO_ONECLICK','hr_HR','Automatski podsjetnik za predaju recenzije','PoÅ¡tovana/i {$reviewerName},\n\nÅ¾eljeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju Älanka \"{$articleTitle}\" za Äasopis {$journalName} istekao {$reviewDueDate}. Bilo bi nam izuzetno drago ukoliko biste recenziju zavrÅ¡ili i predali Äim je prije moguÄ‡e.\n\nDo priloga moÅ¾ete doÄ‡i izravno prateÄ‡i ovu kodiranu pozivnicu:\nURL Älanka: {$submissionReviewUrl}\n\nMolimo vas da potvrdite da ste u moguÄ‡nosti privesti kraju ovaj kljuÄan doprinos radu Äasopisa. Nadamo se skorom odgovoru.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovim obrascem e-poÅ¡te urednik rubrike podsjeÄ‡a recenzenta da rok za izradu recenzije istekao. Obrazac se koristi ukoliko je recenzentu je omoguÄ‡en pristup jednim klikom.'),('REVIEW_REMIND_ONECLICK','en_US','Submission Review Reminder','{$reviewerName}:\n\nJust a gentle reminder of our request for your review of the submission, \"{$articleTitle},\" for {$journalName}. We were hoping to have this review by {$reviewDueDate}, and would be pleased to receive it as soon as you are able to prepare it.\n\nSubmission URL: {$submissionReviewUrl}\n\nPlease confirm your ability to complete this vital contribution to the work of the journal. I look forward to hearing from you.\n\n{$editorialContactSignature}','This email is sent by a Section Editor to remind a reviewer that their review is due.'),('REVIEW_REMIND_ONECLICK','hr_HR','Podsjetnik za predaju Recenzije','{$reviewerName}:\n\nÅ½eljeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju Älanka, \"{$articleTitle},\" za Äasopis {$journalName} istekao {$reviewDueDate}. Bilo bi nam izuzetno drago ukoliko biste recenziju zavrÅ¡ili i predali Äim je prije moguÄ‡e.\n\nPodsjeÄ‡amo da do priloga moÅ¾ete doÄ‡i izravno prateÄ‡i ovu kodiranu pozivnicu:\n{$submissionReviewUrl}\n\nMolimo vas da potvrdite da ste u moguÄ‡nosti privesti kraju ovaj kljuÄan doprinos radu Äasopisa. Nadamo se skorom odgovoru.\n\n{$editorialContactSignature}','Ovu e-poÅ¡tu je poslao urednik rubrike da podsjeti recenzenta da je njegova recenzija dospjela.'),('REVIEW_REQUEST','en_US','Article Review Request','{$reviewerName}:\n\nI believe that you would serve as an excellent reviewer of the manuscript, \"{$articleTitle},\" which has been submitted to {$journalName}. The submission\'s abstract is inserted below, and I hope that you will consider undertaking this important task for us.\n\nPlease log into the journal web site by {$weekLaterDate} to indicate whether you will undertake the review or not, as well as to access the submission and to record your review and recommendation. The web site is {$journalUrl}\n\nThe review itself is due {$reviewDueDate}.\n\nIf you do not have your username and password for the journal\'s web site, you can use this link to reset your password (which will then be emailed to you along with your username). {$passwordResetUrl}\n\nSubmission URL: {$submissionReviewUrl}\n\nThank you for considering this request.\n\n{$editorialContactSignature}\n\n\n\n\"{$articleTitle}\"\n\n{$abstractTermIfEnabled}\n{$articleAbstract}','This email from the Section Editor to a Reviewer requests that the reviewer accept or decline the task of reviewing a submission. It provides information about the submission such as the title and abstract, a review due date, and how to access the submission itself. This message is used when the Standard Review Process is selected in Journal Setup, Step 2. (Otherwise see REVIEW_REQUEST_ATTACHED.)'),('REVIEW_REQUEST','hr_HR','Zamolba za recenziju Älanka','PoÅ¡tovana/i {$reviewerName},\n\ns obzirom na vaÅ¡e iskustvo i podruÄje ekspertize, rado bismo vam povjerili zadatak recenzije Älanka \"{$articleTitle}\" prijavljenog u naÅ¡ Äasopis {$journalName}. SaÅ¾etak Älanka nalazi se u nastavku ove poruke. Nadamo se da Ä‡ete prihvatiti naÅ¡u ponudu te izvrÅ¡iti ovu, za nas iznimno vaÅ¾nu, zadaÄ‡u.\n\nMolimo vas da se kao korisnik prijavite na mreÅ¾nu stranicu Äasopisa do {$weekLaterDate} kako biste naznaÄili hoÄ‡ete li preuzeti recenziju ili ne. Potom, ukoliko prihvatite izradu recenzije, na istome mjestu moÅ¾ete pristupiti tekstu Älanka te zabiljeÅ¾ili vaÅ¡u recenziju i preporuku. MreÅ¾na stranica Äasopisa je {$journalUrl}\n\nU sluÄaju da nemate pri ruci svoje korisniÄko ime ili lozinku za mreÅ¾nu stranicu Äasopisa, moÅ¾ete se koristiti ovom poveznicom kako biste promijenili lozinku (koju Ä‡emo vam tada, zajedno s korisniÄkim imenom, poslati putem e-poÅ¡te). {$passwordResetUrl}\n\nSama recenzija trebala bi biti zavrÅ¡ena zakljuÄno s {$reviewDueDate}.\n\nURL Älanka: {$submissionReviewUrl}\n\nSrdaÄno,\n{$editorialContactSignature}\n\n\"{$articleTitle}\"\n\n{$abstractTermIfEnabled}\n{$articleAbstract}','Ovim obrascem e-poÅ¡te urednik rubrike Å¡alje upit recenzentu moÅ¾e li prihvatiti zadatak recenziranja Älanka. Zamolba sadrÅ¾i osnovne informacije u vidu naslova i kratkog sadrÅ¾aja Älanka, datum do kojeg bi recenzija trebala biti napisana te naÄina na koji se recenzent moÅ¾e prijaviti u sustav. Ova poruka se koristi kada je odabran standardni recenzijski postupak u 2. koraku Postavljanja Äasopisa (Ako nije, koristi se Zamolba za recenziju Älanka u privitku)'),('REVIEW_REQUEST_ATTACHED','en_US','Article Review Request','{$reviewerName}:\n\nI believe that you would serve as an excellent reviewer of the manuscript, \"{$articleTitle},\" and I am asking that you consider undertaking this important task for us. The Review Guidelines for this journal are appended below, and the submission is attached to this email. Your review of the submission, along with your recommendation, should be emailed to me by {$reviewDueDate}.\n\nPlease indicate in a return email by {$weekLaterDate} whether you are able and willing to do the review.\n\nThank you for considering this request.\n\n{$editorialContactSignature}\n\n\nReview Guidelines\n\n{$reviewGuidelines}\n','This email is sent by the Section Editor to a Reviewer to request that they accept or decline the task of reviewing a submission. It includes the submission as an attachment. This message is used when the Email-Attachment Review Process is selected in Journal Setup, Step 2. (Otherwise see REVIEW_REQUEST.)'),('REVIEW_REQUEST_ATTACHED','hr_HR','Zamolba za recenziju Älanka u privitku','PoÅ¡tovana/i {$reviewerName},\n\ns obzirom na vaÅ¡e iskustvo i podruÄje ekspertize, rado bismo vam povjerili zadatak recenzije Älanka \"{$articleTitle}\" prijavljenog u naÅ¡ Äasopis. Nadamo se da Ä‡ete prihvatiti naÅ¡u ponudu te izvrÅ¡iti ovu, za nas iznimno vaÅ¾nu, zadaÄ‡u.\nU nastavku teksta poruke nalaze se upute za recenzente naÅ¡eg Äasopisa, a tekst Älanka nalazi se u prilogu. Od vas oÄekujemo da nam vaÅ¡u recenziju Älanka, zajedno s preporukom dostavite e-poÅ¡tom zakljuÄno s {$reviewDueDate}.\n\nNo prije svega, molimo vas da nam u odgovoru na ovu poruku e-poÅ¡tom zakljuÄno s datumom {$weekLaterDate} naznaÄite da li ste u moguÄ‡nosti i da li ste voljni izvrÅ¡iti recenziju\n\nSrdaÄno,\n{$editorialContactSignature}\n\nUpute za recenzente\n\n{$reviewGuidelines}','Ovim obrascem e-poÅ¡te urednik rubrike Å¡alje upit recenzentu moÅ¾e li prihvatiti ili je prisiljen odbiti zadatak recenziranja Älanka. Zamolba sadrÅ¾i i tekst Älanka u privitku. Ova poruka se koristi kada je u 2. koraku Postavljanja Äasopisa odabran recenzijski postupak u kojem se prilog Å¡alje recenzentu kao privitak e-poÅ¡te. (Ako ne, pogledajte Zamolba za recenziju Älanka.)'),('REVIEW_REQUEST_ATTACHED_SUBSEQUENT','en_US','Article Review Request','{$reviewerName}:\n\nThis regards the manuscript \"{$articleTitle},\" which is under consideration by {$journalName}.\n\nFollowing the review of the previous version of the manuscript, the authors have now submitted a revised version of their paper. We would appreciate it if you could help evaluate it.\n\nThe Review Guidelines for this journal are appended below, and the submission is attached to this email. Your review of the submission, along with your recommendation, should be emailed to me by {$reviewDueDate}.\n\nPlease indicate in a return email by {$weekLaterDate} whether you are able and willing to do the review.\n\nThank you for considering this request.\n\n{$editorialContactSignature}\n\n\nReview Guidelines\n\n{$reviewGuidelines}\n','This email is sent by the Section Editor to a Reviewer to request that they accept or decline the task of reviewing a submission for a second or greater round of review. It includes the submission as an attachment. This message is used when the Email-Attachment Review Process is selected in Journal Setup, Step 2. (Otherwise see REVIEW_REQUEST_SUBSEQUENT.)'),('REVIEW_REQUEST_ONECLICK','en_US','Article Review Request','{$reviewerName}:\n\nI believe that you would serve as an excellent reviewer of the manuscript, \"{$articleTitle},\" which has been submitted to {$journalName}. The submission\'s abstract is inserted below, and I hope that you will consider undertaking this important task for us.\n\nPlease log into the journal web site by {$weekLaterDate} to indicate whether you will undertake the review or not, as well as to access the submission and to record your review and recommendation.\n\nThe review itself is due {$reviewDueDate}.\n\nSubmission URL: {$submissionReviewUrl}\n\nThank you for considering this request.\n\n{$editorialContactSignature}\n\n\n\n\"{$articleTitle}\"\n\n{$abstractTermIfEnabled}\n{$articleAbstract}','This email from the Section Editor to a Reviewer requests that the reviewer accept or decline the task of reviewing a submission. It provides information about the submission such as the title and abstract, a review due date, and how to access the submission itself. This message is used when the Standard Review Process is selected in Journal Setup, Step 2, and one-click reviewer access is enabled.'),('REVIEW_REQUEST_ONECLICK','hr_HR','Zamolba za recenziju Älanka','PoÅ¡tovana/i {$reviewerName},\n\ns obzirom na vaÅ¡e iskustvo i podruÄje ekspertize, rado bismo vam povjerili zadatak recenzije Älanka \"{$articleTitle}\" prijavljenog u naÅ¡ Äasopis {$journalName}. SaÅ¾etak Älanka nalazi se u nastavku ove poruke. Nadamo se da Ä‡ete prihvatiti naÅ¡u ponudu te izvrÅ¡iti ovu, za nas iznimno vaÅ¾nu, zadaÄ‡u.\n\nMolimo vas da se kao korisnik prijavite na mreÅ¾nu stranicu Äasopisa do {$weekLaterDate} kako biste naznaÄili hoÄ‡ete li preuzeti recenziju ili ne. Potom, ukoliko prihvatite izradu recenzije, na istome mjestu moÅ¾ete pristupiti tekstu Älanka te zabiljeÅ¾ili vaÅ¡u recenziju i preporuku.\n\nSama recenzija trebala bi biti zavrÅ¡ena zakljuÄno s {$reviewDueDate}.\n\nDo priloga moÅ¾ete doÄ‡i izravno prateÄ‡i ovu kodiranu pozivnicu: {$submissionReviewUrl}\n\nSrdaÄno,\n{$editorialContactSignature}\n\n\"{$articleTitle}\"\n\n{$abstractTermIfEnabled}\n{$articleAbstract}','Ovim obrascem e-poÅ¡te urednik rubrike Å¡alje upit recenzentu moÅ¾e li prihvatiti ili je prisiljen odbiti zadatak recenziranja Älanka. Zamolba sadrÅ¾i osnovne informacije u vidu naslova i kratkog sadrÅ¾aja Älanka, datum do kojeg bi recenzija trebala biti napisana te naÄina na koji  recenzent moÅ¾e pristupiti Älanku. Ova poruka se koristi kada je odabran standardni recenzijski postupak u 2. koraku Postavljanja Äasopisa, a recenzentu je omoguÄ‡en pristup jednim klikom.'),('REVIEW_REQUEST_ONECLICK_SUBSEQUENT','en_US','Article Review Request','{$reviewerName}:\n\nThis regards the manuscript \"{$articleTitle},\" which is under consideration by {$journalName}.\n\nFollowing the review of the previous version of the manuscript, the authors have now submitted a revised version of their paper. We would appreciate it if you could help evaluate it.\n\nPlease log into the journal web site by {$weekLaterDate} to indicate whether you will undertake the review or not, as well as to access the submission and to record your review and recommendation.\n\nThe review itself is due {$reviewDueDate}.\n\nSubmission URL: {$submissionReviewUrl}\n\nThank you for considering this request.\n\n{$editorialContactSignature}\n\n\n\n\"{$articleTitle}\"\n\n{$abstractTermIfEnabled}\n{$articleAbstract}','This email from the Section Editor to a Reviewer requests that the reviewer accept or decline the task of reviewing a submission for a second or greater round of review. It provides information about the submission such as the title and abstract, a review due date, and how to access the submission itself. This message is used when the Standard Review Process is selected in Journal Setup, Step 2, and one-click reviewer access is enabled.'),('REVIEW_REQUEST_SUBSEQUENT','en_US','Article Review Request','{$reviewerName}:\n\nThis regards the manuscript \"{$articleTitle},\" which is under consideration by {$journalName}.\n\nFollowing the review of the previous version of the manuscript, the authors have now submitted a revised version of their paper. We would appreciate it if you could help evaluate it.\n\nPlease log into the journal web site by {$weekLaterDate} to indicate whether you will undertake the review or not, as well as to access the submission and to record your review and recommendation. The web site is {$journalUrl}\n\nThe review itself is due {$reviewDueDate}.\n\nIf you do not have your username and password for the journal\'s web site, you can use this link to reset your password (which will then be emailed to you along with your username). {$passwordResetUrl}\n\nSubmission URL: {$submissionReviewUrl}\n\nThank you for considering this request.\n\n{$editorialContactSignature}\n\n\n\n\"{$articleTitle}\"\n\n{$abstractTermIfEnabled}\n{$articleAbstract}','This email from the Section Editor to a Reviewer requests that the reviewer accept or decline the task of reviewing a submission for a second or greater round of review. It provides information about the submission such as the title and abstract, a review due date, and how to access the submission itself. This message is used when the Standard Review Process is selected in Journal Setup, Step 2. (Otherwise see REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)'),('REVISED_VERSION_NOTIFY','en_US','Revised Version Uploaded','{$editorialContactName}:\n\nA revised version of \"{$articleTitle}\" has been uploaded by the author {$authorName}.\n\nSubmission URL: {$submissionUrl}\n\n{$editorialContactSignature}','This email is automatically sent to the assigned editor when author uploads a revised version of an article.'),('SUBMISSION_ACK','en_US','Submission Acknowledgement','{$authorName}:\n\nThank you for submitting the manuscript, \"{$articleTitle}\" to {$journalName}. With the online journal management system that we are using, you will be able to track its progress through the editorial process by logging in to the journal web site:\n\nManuscript URL: {$submissionUrl}\nUsername: {$authorUsername}\n\nIf you have any questions, please contact me. Thank you for considering this journal as a venue for your work.\n\n{$editorialContactSignature}','This email, when enabled, is automatically sent to an author when he or she completes the process of submitting a manuscript to the journal. It provides information about tracking the submission through the process and thanks the author for the submission.'),('SUBMISSION_ACK','hr_HR','Prilog zaprimljen','PoÅ¡tovana/i {$authorName},\n\nzahvaljujemo Å¡to ste prijavili prilog \"{$articleTitle}\" naÅ¡em Äasopisu {$journalName}. PomoÄ‡u sustava upravljanja Äasopisom koji koristimo, moÄ‡i Ä‡ete aktivno pratiti kretanje Älanka kroz postupak ureÄ‘ivanja prijavljujuÄ‡i se na mreÅ¾nu stranicu Äasopisa:\n\nURL rukopisa: {$submissionUrl}\nKorisniÄko ime: {$authorUsername}\n\nU sluÄaju da imate bilo kakvih pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$editorialContactSignature}','Ovaj se obrazac e-poÅ¡te automatski Å¡alje autoru kada su on ili ona zavrÅ¡ili postupak prijave priloga Äasopisu. Poruka daje informacije o tome kako mogu pratiti prilog kroz ureÄ‘ivaÄki postupak.'),('SUBMISSION_COMMENT','en_US','Submission Comment','{$name}:\n\n{$commentName} has added a comment to the submission, \"{$articleTitle}\" in {$journalName}:\n\n{$comments}','This email notifies the various people involved in a submission\'s editing process that a new comment has been posted.'),('SUBMISSION_COMMENT','hr_HR','Komentar priloga','PoÅ¡tovana/i {$name},\n\n{$commentName} je upravo priloÅ¾io komentar Älanka \"{$articleTitle}\" u Äasopisu {$journalName}:\n\n{$comments}\n','Ovaj obrazac e-poÅ¡te obavjeÅ¡tava osobe ukljuÄene u postupak ureÄ‘ivanja nekog priloga o tome da je unesen novi komentar.'),('SUBMISSION_DECISION_REVIEWERS','en_US','Decision on \"{$articleTitle}\"','As one of the reviewers for the submission, \"{$articleTitle},\" to {$journalName}, I am sending you the reviews and editorial decision sent to the author of this piece. Thank you again for your important contribution to this process.\n\n{$editorialContactSignature}\n\n{$comments}','This email notifies the reviewers of a submission that the review process has been completed. It includes information about the article and the decision reached, and thanks the reviewers for their contributions.'),('SUBMISSION_DECISION_REVIEWERS','hr_HR','Odluka o Älanku \"{$articleTitle}\"','Kao jednom od recenzenata Älanka \"{$articleTitle}\" za Äasopis {$journalName} Å¡aljemo vam recenzije i uredniÄke odluke koje su poslane autoru ovog rada. Å½eljeli bismo vam joÅ¡ jednom zahvaliti na vaÅ¡em vaÅ¾nom doprinosu ovom postupku.\n\nSrdaÄno,\n{$editorialContactSignature}\n\n{$comments}','Ovim se obrascem e-poÅ¡te obavjeÅ¡tavaju recenzenti da je recenzijski postupak zavrÅ¡en. Poruka sadrÅ¾i informacije o Älanku i donesenoj odluci.'),('SUBMISSION_UNSUITABLE','en_US','Unsuitable Submission','{$authorName}:\n\nAn initial review of \"{$articleTitle}\" has made it clear that this submission does not fit within the scope and focus of {$journalName}. I recommend that you consult the description of this journal under About, as well as its current contents, to learn more about the work that we publish. You might also consider submitting this manuscript to another, more suitable journal.\n\n{$editorialContactSignature}',''),('SUBMISSION_UNSUITABLE','hr_HR','Tematski neprimjeren prilog','PoÅ¡tovana/i {$authorName},\n\ninicijalnom recenzijom Älanka \"{$articleTitle}\" ustanovili smo da se vaÅ¡ prilog ne uklapa u djelokrug i podruÄje Äasopisa {$journalName}. PredlaÅ¾emo da pogledate opis Äasopisa (u sekciji \"O Äasopisu\") te sadrÅ¾aj izdanih brojeva kako biste stekli bolji uvid o vrsti radova koje objavljujemo. PredlaÅ¾emo vam da razmotrite prijavu ovog priloga nekom drugom, primjerenijem, Äasopisu.\n\nSrdaÄno,\n{$editorialContactSignature}',''),('SUBSCRIPTION_AFTER_EXPIRY','en_US','Subscription Expired','{$subscriberName}:\n\nYour {$journalName} subscription has expired.\n\n{$subscriptionType}\nExpiry date: {$expiryDate}\n\nTo renew your subscription, please go to the journal website. You are able to log in to the system with your username, \"{$username}\".\n\nIf you have any questions, please feel free to contact me.\n\n{$subscriptionContactSignature}','This email notifies a subscriber that their subscription has expired. It provides the journal\'s URL along with instructions for access.'),('SUBSCRIPTION_AFTER_EXPIRY','hr_HR','VaÅ¡a pretplata je istekla','{$subscriberName},\n\nvaÅ¡a pretplata na Äasopis {$journalName} je istekla.\n\n{$subscriptionType}\nDatum isteka: {$expiryDate}\n\nKako biste obnovili vaÅ¡u pretplatu posjetite mreÅ¾nu stranicu Äasopisa. U sustav se moÅ¾ete prijaviti koristeÄ‡i vaÅ¡e korisniÄko ime \"{$username}\".\n\nU sluÄaju da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$subscriptionContactSignature}\n','Ovim se obrascem e-poÅ¡te obavjeÅ¡tavaju pretplatnici da je njihova pretplata istekla. Poruka sadrÅ¾i URL Äasopisa i upute za pristup.'),('SUBSCRIPTION_AFTER_EXPIRY_LAST','en_US','Subscription Expired - Final Reminder','{$subscriberName}:\n\nYour {$journalName} subscription has expired.\nPlease note that this is the final reminder that will be emailed to you.\n\n{$subscriptionType}\nExpiry date: {$expiryDate}\n\nTo renew your subscription, please go to the journal website. You are able to log in to the system with your username, \"{$username}\".\n\nIf you have any questions, please feel free to contact me.\n\n{$subscriptionContactSignature}','This email notifies a subscriber that their subscription has expired. It provides the journal\'s URL along with instructions for access.'),('SUBSCRIPTION_AFTER_EXPIRY_LAST','hr_HR','VaÅ¡a pretplata je istekla - Posljednji podsjetnik','{$subscriberName},\n\nvaÅ¡a pretplata na Äasopis {$journalName} je istekla.\nOvo je posljednji podsjetnik koji Ä‡e vam biti poslan e-poÅ¡tom.\n\n{$subscriptionType}\nDatum isteka: {$expiryDate}\n\nKako biste obnovili vaÅ¡u pretplatu, posjetite mreÅ¾nu stranicu Äasopisa. U sustav se moÅ¾ete prijaviti koristeÄ‡i vaÅ¡e korisniÄko ime \"{$username}\".\n\nU sluÄaju da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$subscriptionContactSignature}','Ovim se obrascem e-poÅ¡te obavjeÅ¡tavaju pretplatnici da je njihova pretplata istekla. Poruka sadrÅ¾i URL Äasopisa i upute za pristup.'),('SUBSCRIPTION_BEFORE_EXPIRY','en_US','Notice of Subscription Expiry','{$subscriberName}:\n\nYour {$journalName} subscription is about to expire.\n\n{$subscriptionType}\nExpiry date: {$expiryDate}\n\nTo ensure the continuity of your access to this journal, please go to the journal website and renew your subscription. You are able to log in to the system with your username, \"{$username}\".\n\nIf you have any questions, please feel free to contact me.\n\n{$subscriptionContactSignature}','This email notifies a subscriber that their subscription will soon expire. It provides the journal\'s URL along with instructions for access.'),('SUBSCRIPTION_BEFORE_EXPIRY','hr_HR','Obavijest o isteku pretplate','{$subscriberName},\n\nvaÅ¡a pretplata na Äasopis {$journalName} uskoro istiÄe.\n\n{$subscriptionType}\nDatum isteka: {$expiryDate}\n\nKako biste osigurali kontinuitet pristupa sadrÅ¾aju ovog Äasopisa, molimo da posjetite mreÅ¾nu stranicu Äasopisa i obnovite vaÅ¡u pretplatu. U sustav se moÅ¾ete prijaviti koristeÄ‡i vaÅ¡e korisniÄko ime \"{$username}\".\n\nU sluÄaju da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.\n\nSrdaÄno,\n{$subscriptionContactSignature}','Ovim se obrascem e-poÅ¡te obavjeÅ¡tavaju pretplatnici da Ä‡e njihova pretplata uskoro isteÄ‡i. Poruka sadrÅ¾i URL Äasopisa i upute za pristup.'),('SUBSCRIPTION_NOTIFY','en_US','Subscription Notification','{$subscriberName}:\n\nYou have now been registered as a subscriber in our online journal management system for {$journalName}, with the following subscription:\n\n{$subscriptionType}\n\nTo access content that is available only to subscribers, simply log in to the system with your username, \"{$username}\".\n\nOnce you have logged in to the system you can change your profile details and password at any point.\n\nPlease note that if you have an institutional subscription, there is no need for users at your institution to log in, since requests for subscription content will be automatically authenticated by the system.\n\nIf you have any questions, please feel free to contact me.\n\n{$subscriptionContactSignature}','This email notifies a registered reader that the Manager has created a subscription for them. It provides the journal\'s URL along with instructions for access.'),('SUBSCRIPTION_NOTIFY','hr_HR','Obavijest o pretplati','PoÅ¡tovana/i {$subscriberName},\n\nupravo smo vas u naÅ¡em e-sustavu za ureÄ‘ivanje Äasopisa evidentirali kao pretplatnika Äasopisa {$journalName}. Tip vaÅ¡e pretplate je:\n\n{$subscriptionType}\n\nKako biste pristupili sadrÅ¾aju koji je raspoloÅ¾iv iskljuÄivo za pretplatnike, sve Å¡to trebate uÄiniti je prijaviti se u sustav uz pomoÄ‡ vaÅ¡eg korisniÄkog imena \"{$username}\".\n\nNakon Å¡to ste se prijavili u sustav, moÅ¾ete u bilo kojem trenutku promijeniti detalje svog profila ili lozinku.\n\nMolimo vas da uzmete u obzir da u sluÄaju da koristite institucionalnu pretplatu nije potrebno da se korisnici pri vaÅ¡oj instituciji registriraju, buduÄ‡i da Ä‡e sustav automatski autorizirati zahtjeve za pretplatniÄki sadrÅ¾aj koji dolaze s mreÅ¾nih adresa vaÅ¡e institucije.\n\nMolimo vas da nam se obratite u sluÄaju da imate bilo kakva dodatna pitanja.\n\nSrdaÄno,\n{$subscriptionContactSignature}','Ovim se obrascem e-poÅ¡te obavjeÅ¡tavaju pretplatnici o aktivaciji njihove pretplate . Poruka sadrÅ¾i URL Äasopisa i upute za pristup.'),('SUBSCRIPTION_PURCHASE_INDL','en_US','Subscription Purchase: Individual','An individual subscription has been purchased online for {$journalName} with the following details.\n\nSubscription Type:\n{$subscriptionType}\n\nUser:\n{$userDetails}\n\nMembership Information (if provided):\n{$membership}\n\nTo view or edit this subscription, please use the following URL.\n\nSubscription URL: {$subscriptionUrl}\n','This email notifies the Subscription Manager that an individual subscription has been purchased online. It provides summary information about the subscription and a quick access link to the purchased subscription.'),('SUBSCRIPTION_PURCHASE_INSTL','en_US','Subscription Purchase: Institutional','An institutional subscription has been purchased online for {$journalName} with the following details. To activate this subscription, please use the provided Subscription URL and set the subscription status to \'Active\'.\n\nSubscription Type:\n{$subscriptionType}\n\nInstitution:\n{$institutionName}\n{$institutionMailingAddress}\n\nDomain (if provided):\n{$domain}\n\nIP Ranges (if provided):\n{$ipRanges}\n\nContact Person:\n{$userDetails}\n\nMembership Information (if provided):\n{$membership}\n\nTo view or edit this subscription, please use the following URL.\n\nSubscription URL: {$subscriptionUrl}\n','This email notifies the Subscription Manager that an institutional subscription has been purchased online. It provides summary information about the subscription and a quick access link to the purchased subscription.'),('SUBSCRIPTION_RENEW_INDL','en_US','Subscription Renewal: Individual','An individual subscription has been renewed online for {$journalName} with the following details.\n\nSubscription Type:\n{$subscriptionType}\n\nUser:\n{$userDetails}\n\nMembership Information (if provided):\n{$membership}\n\nTo view or edit this subscription, please use the following URL.\n\nSubscription URL: {$subscriptionUrl}\n','This email notifies the Subscription Manager that an individual subscription has been renewed online. It provides summary information about the subscription and a quick access link to the renewed subscription.'),('SUBSCRIPTION_RENEW_INSTL','en_US','Subscription Renewal: Institutional','An institutional subscription has been renewed online for {$journalName} with the following details.\n\nSubscription Type:\n{$subscriptionType}\n\nInstitution:\n{$institutionName}\n{$institutionMailingAddress}\n\nDomain (if provided):\n{$domain}\n\nIP Ranges (if provided):\n{$ipRanges}\n\nContact Person:\n{$userDetails}\n\nMembership Information (if provided):\n{$membership}\n\nTo view or edit this subscription, please use the following URL.\n\nSubscription URL: {$subscriptionUrl}\n','This email notifies the Subscription Manager that an institutional subscription has been renewed online. It provides summary information about the subscription and a quick access link to the renewed subscription.'),('SWORD_DEPOSIT_NOTIFICATION','en_US','Deposit Notification','Congratulations on the acceptance of your submission, \"{$articleTitle}\", for publication in {$journalName}. If you choose, you may automatically deposit your submission in one or more repositories.\n\nGo to {$swordDepositUrl} to proceed.\n\nThis email was generated by Open Journal Systems\' SWORD deposit plugin.','This email template is used to notify an author of optional deposit points for SWORD deposits.'),('THESIS_ABSTRACT_CONFIRM','en_US','Thesis Abstract Submission','This email was automatically generated by the {$journalName} thesis abstract submission form.\n\nPlease confirm that the submitted information is correct. Upon receiving your confirmation, the abstract will be published in the online edition of the journal.\n\nSimply reply to {$thesisName} ({$thesisEmail}) with the contents of this message and your confirmation, as well as any recommended clarifications or corrections.\n\nThank you.\n\n\nTitle : {$title} \nAuthor : {$studentName}\nDegree : {$degree}\nDegree Name: {$degreeName}\nDepartment : {$department}\nUniversity : {$university}\nAcceptance Date : {$dateApproved}\nSupervisor : {$supervisorName}\n\nAbstract\n--------\n{$abstract}\n\n{$thesisContactSignature}','This email template is used to confirm a thesis abstract submission by a student. It is sent to the student\'s supervisor, who is asked to confirm the details of the submitted thesis abstract.'),('USER_REGISTER','en_US','Journal Registration','{$userFullName}\n\nYou have now been registered as a user with {$journalName}. We have included your username and password in this email, which are needed for all work with this journal through its website. At any point, you can ask to be removed from the journal\'s list of users by contacting me.\n\nUsername: {$username}\nPassword: {$password}\n\nThank you,\n{$principalContactSignature}','This email is sent to a newly registered user to welcome them to the system and provide them with a record of their username and password.'),('USER_REGISTER','hr_HR','Registracija novog korisnika','Zahvaljujemo vam se Å¡to ste se registrirali kao korisnik Äasopisa {$journalName}. Molimo vas da pohranite vaÅ¡e korisniÄko ime i lozinku jer su oni nuÅ¾ni za sve aktivnosti vezane uz Äasopis.\n\nKorisniÄko ime: {$username}\nLozinka: {$password}\n\nSrdaÄno,\n{$principalContactSignature}','Ovaj se obrazac e-poÅ¡te Å¡alje novoregistriranim korisnicima u sustavu i sadrÅ¾i njihovo korisniÄko ime i lozinku.'),('USER_VALIDATE','en_US','Validate Your Account','{$userFullName}\n\nYou have created an account with {$journalName}, but before you can start using it, you need to validate your email account. To do this, simply follow the link below:\n\n{$activateUrl}\n\nThank you,\n{$principalContactSignature}','This email is sent to a newly registered user to validate their email account.'),('USER_VALIDATE','hr_HR','Validacija korisniÄkog raÄuna','{$userFullName}\n\nHcala vam Å¡to ste kreirali korisniÄki raÄun pri Äasopisu {$journalName}. No, prije nego aktiviramo vaÅ¡ raÄun trebate uÄiniti joÅ¡ jedan korak, a to je potvrda vaÅ¡e adrese e-poÅ¡te. To Ä‡ete uÄiniti jednostavno tako Å¡to Ä‡ete slijediti poveznicu priloÅ¾enu ovoj poruci:\n\n{$activateUrl}\n\nSrdaÄno,\n{$principalContactSignature}','Ova se poruka Å¡alje novoregistriranim korisnicima kako bi im se zaÅ¾elila dobrodoÅ¡lica na sistem i zatraÅ¾ila potvrda njihove adrese e-poÅ¡te.');
/*!40000 ALTER TABLE `email_templates_default_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_log`
--

DROP TABLE IF EXISTS `event_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_log` (
  `log_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `date_logged` datetime NOT NULL,
  `ip_address` varchar(39) NOT NULL,
  `event_type` bigint(20) DEFAULT NULL,
  `message` text,
  `is_translated` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `event_log_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_log`
--

LOCK TABLES `event_log` WRITE;
/*!40000 ALTER TABLE `event_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_log_settings`
--

DROP TABLE IF EXISTS `event_log_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_log_settings` (
  `log_id` bigint(20) NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `event_log_settings_pkey` (`log_id`,`setting_name`),
  KEY `event_log_settings_log_id` (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_log_settings`
--

LOCK TABLES `event_log_settings` WRITE;
/*!40000 ALTER TABLE `event_log_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_log_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `external_feed_settings`
--

DROP TABLE IF EXISTS `external_feed_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `external_feed_settings` (
  `feed_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `external_feed_settings_pkey` (`feed_id`,`locale`,`setting_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `external_feed_settings`
--

LOCK TABLES `external_feed_settings` WRITE;
/*!40000 ALTER TABLE `external_feed_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `external_feed_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `external_feeds`
--

DROP TABLE IF EXISTS `external_feeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `external_feeds` (
  `feed_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `display_homepage` tinyint(4) NOT NULL DEFAULT '0',
  `display_block` smallint(6) NOT NULL DEFAULT '0',
  `limit_items` tinyint(4) DEFAULT '0',
  `recent_items` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`feed_id`),
  KEY `external_feeds_journal_id` (`journal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `external_feeds`
--

LOCK TABLES `external_feeds` WRITE;
/*!40000 ALTER TABLE `external_feeds` DISABLE KEYS */;
/*!40000 ALTER TABLE `external_feeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filter_groups`
--

DROP TABLE IF EXISTS `filter_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filter_groups` (
  `filter_group_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `symbolic` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `input_type` varchar(255) DEFAULT NULL,
  `output_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`filter_group_id`),
  UNIQUE KEY `filter_groups_symbolic` (`symbolic`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filter_groups`
--

LOCK TABLES `filter_groups` WRITE;
/*!40000 ALTER TABLE `filter_groups` DISABLE KEYS */;
INSERT INTO `filter_groups` VALUES (1,'mods34=>mods34-xml','plugins.metadata.mods34.mods34XmlOutput.displayName','plugins.metadata.mods34.mods34XmlOutput.description','metadata::plugins.metadata.mods34.schema.Mods34Schema(*)','xml::schema(lib/pkp/plugins/metadata/mods34/filter/mods34.xsd)'),(2,'article=>mods34','plugins.metadata.mods34.articleAdapter.displayName','plugins.metadata.mods34.articleAdapter.description','class::classes.article.Article','metadata::plugins.metadata.mods34.schema.Mods34Schema(ARTICLE)'),(3,'mods34=>article','plugins.metadata.mods34.articleAdapter.displayName','plugins.metadata.mods34.articleAdapter.description','metadata::plugins.metadata.mods34.schema.Mods34Schema(ARTICLE)','class::classes.article.Article'),(4,'article=>dc11','plugins.metadata.dc11.articleAdapter.displayName','plugins.metadata.dc11.articleAdapter.description','class::classes.article.Article','metadata::plugins.metadata.dc11.schema.Dc11Schema(ARTICLE)'),(5,'citation=>nlm30','plugins.metadata.nlm30.citationAdapter.displayName','plugins.metadata.nlm30.citationAdapter.description','class::lib.pkp.classes.citation.Citation','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)'),(6,'nlm30=>citation','plugins.metadata.nlm30.citationAdapter.displayName','plugins.metadata.nlm30.citationAdapter.description','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)','class::lib.pkp.classes.citation.Citation'),(7,'plaintext=>nlm30-element-citation','plugins.metadata.nlm30.citationParsers.displayName','plugins.metadata.nlm30.citationParsers.description','primitive::string','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)'),(8,'nlm30-element-citation=>nlm30-element-citation','plugins.metadata.nlm30.citationLookup.displayName','plugins.metadata.nlm30.citationLookup.description','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)'),(9,'nlm30-element-citation=>plaintext','plugins.metadata.nlm30.citationOutput.displayName','plugins.metadata.nlm30.citationOutput.description','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)','primitive::string'),(10,'nlm30-element-citation=>nlm30-xml','plugins.metadata.nlm30Xml.citationOutput.displayName','plugins.metadata.nlm30Xml.citationOutput.description','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)','xml::*'),(11,'submission=>nlm30-article-xml','plugins.metadata.nlm30.nlm30XmlOutput.displayName','plugins.metadata.nlm30.nlm30XmlOutput.description','class::lib.pkp.classes.submission.Submission','xml::*'),(12,'submission=>nlm23-article-xml','plugins.metadata.nlm30.nlm23XmlOutput.displayName','plugins.metadata.nlm30.nlm23XmlOutput.description','class::lib.pkp.classes.submission.Submission','xml::*'),(13,'nlm30-article-xml=>nlm23-article-xml','plugins.metadata.nlm30.nlm30ToNlm23Xml.displayName','plugins.metadata.nlm30.nlm30ToNlm23Xml.description','xml::*','xml::*'),(14,'submission=>reference-list','plugins.metadata.nlm30.refList.displayName','plugins.metadata.nlm30.refList.description','class::lib.pkp.classes.submission.Submission','class::lib.pkp.classes.citation.PlainTextReferencesList'),(15,'nlm30-element-citation=>isbn','plugins.citationLookup.isbndbExtraction.displayName','plugins.citationLookup.isbndbExtraction.description','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)','primitive::string'),(16,'isbn=>nlm30-element-citation','plugins.citationLookup.isbndbLookup.displayName','plugins.citationLookup.isbndbLookup.description','primitive::string','metadata::lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema(CITATION)');
/*!40000 ALTER TABLE `filter_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filter_settings`
--

DROP TABLE IF EXISTS `filter_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filter_settings` (
  `filter_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `filter_settings_pkey` (`filter_id`,`locale`,`setting_name`),
  KEY `filter_settings_id` (`filter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filter_settings`
--

LOCK TABLES `filter_settings` WRITE;
/*!40000 ALTER TABLE `filter_settings` DISABLE KEYS */;
INSERT INTO `filter_settings` VALUES (8,'','citationOutputFilterName','lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaNlm30XmlFilter','string'),(8,'','metadataSchemaName','lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema','string'),(9,'','settingsMapping','a:2:{s:6:\"apiKey\";a:2:{i:0;s:11:\"seq1_apiKey\";i:1;s:11:\"seq2_apiKey\";}s:10:\"isOptional\";a:2:{i:0;s:15:\"seq1_isOptional\";i:1;s:15:\"seq2_isOptional\";}}','object'),(10,'','citationOutputFilterName','lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaNlm30XmlFilter','string'),(10,'','metadataSchemaName','lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema','string'),(11,'','xsl','lib/pkp/plugins/metadata/nlm30/filter/nlm30-to-23-ref-list.xsl','string'),(11,'','xslType','2','int'),(12,'','phpVersionMin','5.0.0','string'),(13,'','settingsMapping','a:2:{s:6:\"apiKey\";a:2:{i:0;s:11:\"seq1_apiKey\";i:1;s:11:\"seq2_apiKey\";}s:10:\"isOptional\";a:2:{i:0;s:15:\"seq1_isOptional\";i:1;s:15:\"seq2_isOptional\";}}','object'),(14,'','phpVersionMin','5.0.0','string'),(15,'','phpVersionMin','5.0.0','string'),(16,'','phpVersionMin','5.0.0','string'),(17,'','phpVersionMin','5.0.0','string'),(19,'','citationOutputFilterName','lib.pkp.plugins.citationOutput.mla.filter.Nlm30CitationSchemaMlaFilter','string'),(19,'','metadataSchemaName','lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema','string'),(19,'','ordering','2','int'),(21,'','citationOutputFilterName','lib.pkp.plugins.citationOutput.apa.filter.Nlm30CitationSchemaApaFilter','string'),(21,'','metadataSchemaName','lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema','string'),(21,'','ordering','2','int'),(23,'','citationOutputFilterName','lib.pkp.plugins.citationOutput.vancouver.filter.Nlm30CitationSchemaVancouverFilter','string'),(23,'','metadataSchemaName','lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema','string'),(23,'','ordering','1','int'),(25,'','citationOutputFilterName','lib.pkp.plugins.citationOutput.abnt.filter.Nlm30CitationSchemaAbntFilter','string'),(25,'','metadataSchemaName','lib.pkp.plugins.metadata.nlm30.schema.Nlm30CitationSchema','string'),(25,'','ordering','2','int'),(26,'','phpVersionMin','5.0.0','string'),(27,'','phpVersionMin','5.0.0','string'),(28,'','phpVersionMin','5.0.0','string'),(29,'','phpVersionMin','5.0.0','string');
/*!40000 ALTER TABLE `filter_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filters`
--

DROP TABLE IF EXISTS `filters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filters` (
  `filter_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `filter_group_id` bigint(20) NOT NULL DEFAULT '0',
  `context_id` bigint(20) NOT NULL DEFAULT '0',
  `display_name` varchar(255) DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `is_template` tinyint(4) NOT NULL DEFAULT '0',
  `parent_filter_id` bigint(20) NOT NULL DEFAULT '0',
  `seq` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`filter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filters`
--

LOCK TABLES `filters` WRITE;
/*!40000 ALTER TABLE `filters` DISABLE KEYS */;
INSERT INTO `filters` VALUES (1,1,0,'MODS 3.4','lib.pkp.plugins.metadata.mods34.filter.Mods34DescriptionXmlFilter',0,0,0),(2,2,0,'Extract metadata from a(n) Article','plugins.metadata.mods34.filter.Mods34SchemaArticleAdapter',0,0,0),(3,3,0,'Inject metadata into a(n) Article','plugins.metadata.mods34.filter.Mods34SchemaArticleAdapter',0,0,0),(4,4,0,'Extract metadata from a(n) Article','plugins.metadata.dc11.filter.Dc11SchemaArticleAdapter',0,0,0),(5,5,0,'Extract metadata from a(n) Citation','lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaCitationAdapter',0,0,0),(6,6,0,'Inject metadata into a(n) Citation','lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaCitationAdapter',0,0,0),(7,10,0,'NLM 3.0 XML Citation Output','lib.pkp.plugins.metadata.nlm30.filter.Nlm30CitationSchemaNlm30XmlFilter',0,0,0),(8,11,0,'NLM Journal Publishing V3.0 ref-list','lib.pkp.plugins.metadata.nlm30.filter.PKPSubmissionNlm30XmlFilter',0,0,0),(9,12,0,'NLM Journal Publishing V2.3 ref-list','lib.pkp.classes.filter.GenericSequencerFilter',0,0,0),(10,11,0,'NLM 2.3: NLM 3.0','lib.pkp.plugins.metadata.nlm30.filter.PKPSubmissionNlm30XmlFilter',0,9,1),(11,13,0,'NLM 2.3: NLM 3.0 to 2.3','lib.pkp.classes.xslt.XSLTransformationFilter',0,9,2),(12,8,0,'WorldCat','lib.pkp.plugins.citationLookup.worldcat.filter.WorldcatNlm30CitationSchemaFilter',1,0,0),(13,8,0,'ISBNdb','lib.pkp.classes.filter.GenericSequencerFilter',1,0,0),(14,15,0,'ISBNdb (from NLM)','lib.pkp.plugins.citationLookup.isbndb.filter.IsbndbNlm30CitationSchemaIsbnFilter',0,13,1),(15,16,0,'ISBNdb','lib.pkp.plugins.citationLookup.isbndb.filter.IsbndbIsbnNlm30CitationSchemaFilter',0,13,2),(16,8,0,'PubMed','lib.pkp.plugins.citationLookup.pubmed.filter.PubmedNlm30CitationSchemaFilter',1,0,0),(17,8,0,'CrossRef','lib.pkp.plugins.citationLookup.crossref.filter.CrossrefNlm30CitationSchemaFilter',1,0,0),(18,9,0,'MLA Citation Output','lib.pkp.plugins.citationOutput.mla.filter.Nlm30CitationSchemaMlaFilter',0,0,0),(19,14,0,'MLA Reference List','lib.pkp.classes.citation.PlainTextReferencesListFilter',0,0,0),(20,9,0,'APA Citation Output','lib.pkp.plugins.citationOutput.apa.filter.Nlm30CitationSchemaApaFilter',0,0,0),(21,14,0,'APA Reference List','lib.pkp.classes.citation.PlainTextReferencesListFilter',0,0,0),(22,9,0,'Vancouver Citation Output','lib.pkp.plugins.citationOutput.vancouver.filter.Nlm30CitationSchemaVancouverFilter',0,0,0),(23,14,0,'Vancouver Reference List','lib.pkp.classes.citation.PlainTextReferencesListFilter',0,0,0),(24,9,0,'ABNT Citation Output','lib.pkp.plugins.citationOutput.abnt.filter.Nlm30CitationSchemaAbntFilter',0,0,0),(25,14,0,'ABNT Reference List','lib.pkp.classes.citation.PlainTextReferencesListFilter',0,0,0),(26,7,0,'RegEx','lib.pkp.plugins.citationParser.regex.filter.RegexRawCitationNlm30CitationSchemaFilter',1,0,0),(27,7,0,'ParsCit','lib.pkp.plugins.citationParser.parscit.filter.ParscitRawCitationNlm30CitationSchemaFilter',1,0,0),(28,7,0,'FreeCite','lib.pkp.plugins.citationParser.freecite.filter.FreeciteRawCitationNlm30CitationSchemaFilter',1,0,0),(29,7,0,'ParaCite','lib.pkp.plugins.citationParser.paracite.filter.ParaciteRawCitationNlm30CitationSchemaFilter',1,0,0);
/*!40000 ALTER TABLE `filters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gifts`
--

DROP TABLE IF EXISTS `gifts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gifts` (
  `gift_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` smallint(6) NOT NULL,
  `assoc_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `gift_type` smallint(6) NOT NULL,
  `gift_assoc_id` bigint(20) NOT NULL,
  `buyer_first_name` varchar(40) NOT NULL,
  `buyer_middle_name` varchar(40) DEFAULT NULL,
  `buyer_last_name` varchar(90) NOT NULL,
  `buyer_email` varchar(90) NOT NULL,
  `buyer_user_id` bigint(20) DEFAULT NULL,
  `recipient_first_name` varchar(40) NOT NULL,
  `recipient_middle_name` varchar(40) DEFAULT NULL,
  `recipient_last_name` varchar(90) NOT NULL,
  `recipient_email` varchar(90) NOT NULL,
  `recipient_user_id` bigint(20) DEFAULT NULL,
  `date_redeemed` datetime DEFAULT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `gift_note_title` varchar(90) DEFAULT NULL,
  `gift_note` text,
  `notes` text,
  PRIMARY KEY (`gift_id`),
  KEY `gifts_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gifts`
--

LOCK TABLES `gifts` WRITE;
/*!40000 ALTER TABLE `gifts` DISABLE KEYS */;
/*!40000 ALTER TABLE `gifts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_memberships`
--

DROP TABLE IF EXISTS `group_memberships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_memberships` (
  `user_id` bigint(20) NOT NULL,
  `group_id` bigint(20) NOT NULL,
  `about_displayed` tinyint(4) NOT NULL DEFAULT '1',
  `seq` double NOT NULL DEFAULT '0',
  UNIQUE KEY `group_memberships_pkey` (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_memberships`
--

LOCK TABLES `group_memberships` WRITE;
/*!40000 ALTER TABLE `group_memberships` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_memberships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_settings`
--

DROP TABLE IF EXISTS `group_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_settings` (
  `group_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `group_settings_pkey` (`group_id`,`locale`,`setting_name`),
  KEY `group_settings_group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_settings`
--

LOCK TABLES `group_settings` WRITE;
/*!40000 ALTER TABLE `group_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `group_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` smallint(6) DEFAULT NULL,
  `publish_email` smallint(6) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `context` bigint(20) DEFAULT NULL,
  `about_displayed` tinyint(4) NOT NULL DEFAULT '0',
  `seq` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`),
  KEY `groups_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institutional_subscription_ip`
--

DROP TABLE IF EXISTS `institutional_subscription_ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institutional_subscription_ip` (
  `institutional_subscription_ip_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint(20) NOT NULL,
  `ip_string` varchar(40) NOT NULL,
  `ip_start` bigint(20) NOT NULL,
  `ip_end` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`institutional_subscription_ip_id`),
  KEY `institutional_subscription_ip_subscription_id` (`subscription_id`),
  KEY `institutional_subscription_ip_start` (`ip_start`),
  KEY `institutional_subscription_ip_end` (`ip_end`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institutional_subscription_ip`
--

LOCK TABLES `institutional_subscription_ip` WRITE;
/*!40000 ALTER TABLE `institutional_subscription_ip` DISABLE KEYS */;
/*!40000 ALTER TABLE `institutional_subscription_ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `institutional_subscriptions`
--

DROP TABLE IF EXISTS `institutional_subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `institutional_subscriptions` (
  `institutional_subscription_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint(20) NOT NULL,
  `institution_name` varchar(255) NOT NULL,
  `mailing_address` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`institutional_subscription_id`),
  KEY `institutional_subscriptions_subscription_id` (`subscription_id`),
  KEY `institutional_subscriptions_domain` (`domain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `institutional_subscriptions`
--

LOCK TABLES `institutional_subscriptions` WRITE;
/*!40000 ALTER TABLE `institutional_subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `institutional_subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_files`
--

DROP TABLE IF EXISTS `issue_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issue_files` (
  `file_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `issue_id` bigint(20) NOT NULL,
  `file_name` varchar(90) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `content_type` bigint(20) NOT NULL,
  `original_file_name` varchar(127) DEFAULT NULL,
  `date_uploaded` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `issue_files_issue_id` (`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_files`
--

LOCK TABLES `issue_files` WRITE;
/*!40000 ALTER TABLE `issue_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_galley_settings`
--

DROP TABLE IF EXISTS `issue_galley_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issue_galley_settings` (
  `galley_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `issue_galley_settings_pkey` (`galley_id`,`locale`,`setting_name`),
  KEY `issue_galley_settings_galley_id` (`galley_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_galley_settings`
--

LOCK TABLES `issue_galley_settings` WRITE;
/*!40000 ALTER TABLE `issue_galley_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_galley_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_galleys`
--

DROP TABLE IF EXISTS `issue_galleys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issue_galleys` (
  `galley_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `locale` varchar(5) DEFAULT NULL,
  `issue_id` bigint(20) NOT NULL,
  `file_id` bigint(20) NOT NULL,
  `label` varchar(32) DEFAULT NULL,
  `seq` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`galley_id`),
  KEY `issue_galleys_issue_id` (`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_galleys`
--

LOCK TABLES `issue_galleys` WRITE;
/*!40000 ALTER TABLE `issue_galleys` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_galleys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_settings`
--

DROP TABLE IF EXISTS `issue_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issue_settings` (
  `issue_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `issue_settings_pkey` (`issue_id`,`locale`,`setting_name`),
  KEY `issue_settings_issue_id` (`issue_id`),
  KEY `issue_settings_name_value` (`setting_name`(50),`setting_value`(150))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_settings`
--

LOCK TABLES `issue_settings` WRITE;
/*!40000 ALTER TABLE `issue_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issues` (
  `issue_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `volume` smallint(6) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `current` tinyint(4) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `date_notified` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `access_status` tinyint(4) NOT NULL DEFAULT '1',
  `open_access_date` datetime DEFAULT NULL,
  `show_volume` tinyint(4) NOT NULL DEFAULT '0',
  `show_number` tinyint(4) NOT NULL DEFAULT '0',
  `show_year` tinyint(4) NOT NULL DEFAULT '0',
  `show_title` tinyint(4) NOT NULL DEFAULT '0',
  `style_file_name` varchar(90) DEFAULT NULL,
  `original_style_file_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`issue_id`),
  KEY `issues_journal_id` (`journal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

LOCK TABLES `issues` WRITE;
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journal_settings`
--

DROP TABLE IF EXISTS `journal_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journal_settings` (
  `journal_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `journal_settings_pkey` (`journal_id`,`locale`,`setting_name`),
  KEY `journal_settings_journal_id` (`journal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journal_settings`
--

LOCK TABLES `journal_settings` WRITE;
/*!40000 ALTER TABLE `journal_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `journal_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journals` (
  `journal_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(32) NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `primary_locale` varchar(5) NOT NULL,
  `enabled` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`journal_id`),
  UNIQUE KEY `journals_path` (`path`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journals`
--

LOCK TABLES `journals` WRITE;
/*!40000 ALTER TABLE `journals` DISABLE KEYS */;
/*!40000 ALTER TABLE `journals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metadata_description_settings`
--

DROP TABLE IF EXISTS `metadata_description_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metadata_description_settings` (
  `metadata_description_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `metadata_descripton_settings_pkey` (`metadata_description_id`,`locale`,`setting_name`),
  KEY `metadata_description_settings_id` (`metadata_description_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metadata_description_settings`
--

LOCK TABLES `metadata_description_settings` WRITE;
/*!40000 ALTER TABLE `metadata_description_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `metadata_description_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metadata_descriptions`
--

DROP TABLE IF EXISTS `metadata_descriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metadata_descriptions` (
  `metadata_description_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` bigint(20) NOT NULL DEFAULT '0',
  `assoc_id` bigint(20) NOT NULL DEFAULT '0',
  `schema_namespace` varchar(255) NOT NULL,
  `schema_name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `seq` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`metadata_description_id`),
  KEY `metadata_descriptions_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metadata_descriptions`
--

LOCK TABLES `metadata_descriptions` WRITE;
/*!40000 ALTER TABLE `metadata_descriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `metadata_descriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metrics`
--

DROP TABLE IF EXISTS `metrics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metrics` (
  `load_id` varchar(255) NOT NULL,
  `assoc_type` bigint(20) NOT NULL,
  `context_id` bigint(20) NOT NULL,
  `issue_id` bigint(20) DEFAULT NULL,
  `submission_id` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) NOT NULL,
  `day` varchar(8) DEFAULT NULL,
  `month` varchar(6) DEFAULT NULL,
  `file_type` tinyint(4) DEFAULT NULL,
  `country_id` varchar(2) DEFAULT NULL,
  `region` varchar(2) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `metric_type` varchar(255) NOT NULL,
  `metric` int(11) DEFAULT NULL,
  KEY `metrics_load_id` (`load_id`),
  KEY `metrics_metric_type_journal_id` (`metric_type`,`context_id`),
  KEY `metrics_metric_type_assoc_type_submission_id` (`metric_type`,`assoc_type`,`submission_id`),
  KEY `metrics_metric_type_context_id_assoc_type` (`metric_type`,`context_id`,`assoc_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metrics`
--

LOCK TABLES `metrics` WRITE;
/*!40000 ALTER TABLE `metrics` DISABLE KEYS */;
/*!40000 ALTER TABLE `metrics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mutex`
--

DROP TABLE IF EXISTS `mutex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mutex` (
  `i` tinyint(4) NOT NULL,
  PRIMARY KEY (`i`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mutex`
--

LOCK TABLES `mutex` WRITE;
/*!40000 ALTER TABLE `mutex` DISABLE KEYS */;
INSERT INTO `mutex` VALUES (0),(1),(2),(3),(4),(5),(6),(7),(8),(9);
/*!40000 ALTER TABLE `mutex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `note_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `contents` text,
  PRIMARY KEY (`note_id`),
  KEY `notes_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_mail_list`
--

DROP TABLE IF EXISTS `notification_mail_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_mail_list` (
  `notification_mail_list_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(90) NOT NULL,
  `confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `context` bigint(20) NOT NULL,
  PRIMARY KEY (`notification_mail_list_id`),
  UNIQUE KEY `notification_mail_list_email_context` (`email`,`context`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_mail_list`
--

LOCK TABLES `notification_mail_list` WRITE;
/*!40000 ALTER TABLE `notification_mail_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification_mail_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_settings`
--

DROP TABLE IF EXISTS `notification_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_settings` (
  `notification_id` bigint(20) NOT NULL,
  `locale` varchar(5) DEFAULT NULL,
  `setting_name` varchar(64) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `notification_settings_pkey` (`notification_id`,`locale`,`setting_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_settings`
--

LOCK TABLES `notification_settings` WRITE;
/*!40000 ALTER TABLE `notification_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_subscription_settings`
--

DROP TABLE IF EXISTS `notification_subscription_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_subscription_settings` (
  `setting_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(64) NOT NULL,
  `setting_value` text,
  `user_id` bigint(20) NOT NULL,
  `context` bigint(20) NOT NULL,
  `setting_type` varchar(6) NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_subscription_settings`
--

LOCK TABLES `notification_subscription_settings` WRITE;
/*!40000 ALTER TABLE `notification_subscription_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification_subscription_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `notification_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `context_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `level` bigint(20) NOT NULL,
  `type` bigint(20) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_read` datetime DEFAULT NULL,
  `assoc_type` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `notifications_context_id_user_id` (`context_id`,`user_id`,`level`),
  KEY `notifications_context_id` (`context_id`,`level`),
  KEY `notifications_assoc` (`assoc_type`,`assoc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oai_resumption_tokens`
--

DROP TABLE IF EXISTS `oai_resumption_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oai_resumption_tokens` (
  `token` varchar(32) NOT NULL,
  `expire` bigint(20) NOT NULL,
  `record_offset` int(11) NOT NULL,
  `params` text,
  UNIQUE KEY `oai_resumption_tokens_pkey` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oai_resumption_tokens`
--

LOCK TABLES `oai_resumption_tokens` WRITE;
/*!40000 ALTER TABLE `oai_resumption_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oai_resumption_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_for_review_assignments`
--

DROP TABLE IF EXISTS `object_for_review_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_for_review_assignments` (
  `assignment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `object_id` bigint(20) NOT NULL DEFAULT '0',
  `user_id` bigint(20) DEFAULT NULL,
  `submission_id` bigint(20) DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `date_requested` datetime DEFAULT NULL,
  `date_assigned` datetime DEFAULT NULL,
  `date_mailed` datetime DEFAULT NULL,
  `date_due` datetime DEFAULT NULL,
  `date_reminded_before` datetime DEFAULT NULL,
  `date_reminded_after` datetime DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`assignment_id`),
  UNIQUE KEY `ofr_assignments_pkey` (`object_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_for_review_assignments`
--

LOCK TABLES `object_for_review_assignments` WRITE;
/*!40000 ALTER TABLE `object_for_review_assignments` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_for_review_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_for_review_persons`
--

DROP TABLE IF EXISTS `object_for_review_persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_for_review_persons` (
  `person_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `object_id` bigint(20) NOT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `role` varchar(255) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(90) NOT NULL,
  PRIMARY KEY (`person_id`),
  KEY `ofr_person_object_id` (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_for_review_persons`
--

LOCK TABLES `object_for_review_persons` WRITE;
/*!40000 ALTER TABLE `object_for_review_persons` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_for_review_persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `object_for_review_settings`
--

DROP TABLE IF EXISTS `object_for_review_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `object_for_review_settings` (
  `object_id` bigint(20) NOT NULL,
  `review_object_metadata_id` bigint(20) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `ofr_settings_pkey` (`object_id`,`review_object_metadata_id`),
  KEY `ofr_settings_object_id` (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `object_for_review_settings`
--

LOCK TABLES `object_for_review_settings` WRITE;
/*!40000 ALTER TABLE `object_for_review_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `object_for_review_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objects_for_review`
--

DROP TABLE IF EXISTS `objects_for_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objects_for_review` (
  `object_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `review_object_type_id` bigint(20) NOT NULL,
  `context_id` bigint(20) NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `editor_id` bigint(20) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`object_id`),
  KEY `ofr_object_id` (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objects_for_review`
--

LOCK TABLES `objects_for_review` WRITE;
/*!40000 ALTER TABLE `objects_for_review` DISABLE KEYS */;
/*!40000 ALTER TABLE `objects_for_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paypal_transactions`
--

DROP TABLE IF EXISTS `paypal_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paypal_transactions` (
  `txn_id` varchar(17) NOT NULL,
  `txn_type` varchar(20) DEFAULT NULL,
  `payer_email` varchar(127) DEFAULT NULL,
  `receiver_email` varchar(127) DEFAULT NULL,
  `item_number` varchar(127) DEFAULT NULL,
  `payment_date` varchar(127) DEFAULT NULL,
  `payer_id` varchar(13) DEFAULT NULL,
  `receiver_id` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`txn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paypal_transactions`
--

LOCK TABLES `paypal_transactions` WRITE;
/*!40000 ALTER TABLE `paypal_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `paypal_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pln_deposit_objects`
--

DROP TABLE IF EXISTS `pln_deposit_objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pln_deposit_objects` (
  `deposit_object_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `object_id` bigint(20) NOT NULL,
  `object_type` varchar(36) NOT NULL,
  `deposit_id` bigint(20) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`deposit_object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pln_deposit_objects`
--

LOCK TABLES `pln_deposit_objects` WRITE;
/*!40000 ALTER TABLE `pln_deposit_objects` DISABLE KEYS */;
/*!40000 ALTER TABLE `pln_deposit_objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pln_deposits`
--

DROP TABLE IF EXISTS `pln_deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pln_deposits` (
  `deposit_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `uuid` varchar(36) DEFAULT NULL,
  `status` bigint(20) DEFAULT '0',
  `date_status` datetime DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`deposit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pln_deposits`
--

LOCK TABLES `pln_deposits` WRITE;
/*!40000 ALTER TABLE `pln_deposits` DISABLE KEYS */;
/*!40000 ALTER TABLE `pln_deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plugin_settings`
--

DROP TABLE IF EXISTS `plugin_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plugin_settings` (
  `plugin_name` varchar(80) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `journal_id` bigint(20) NOT NULL,
  `setting_name` varchar(80) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `plugin_settings_pkey` (`plugin_name`,`locale`,`journal_id`,`setting_name`),
  KEY `plugin_settings_plugin_name` (`plugin_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plugin_settings`
--

LOCK TABLES `plugin_settings` WRITE;
/*!40000 ALTER TABLE `plugin_settings` DISABLE KEYS */;
INSERT INTO `plugin_settings` VALUES ('acronplugin','',0,'crontab','a:9:{i:0;a:3:{s:9:\"className\";s:43:\"plugins.generic.usageStats.UsageStatsLoader\";s:9:\"frequency\";a:1:{s:4:\"hour\";s:2:\"24\";}s:4:\"args\";a:1:{i:0;s:9:\"autoStage\";}}i:1;a:3:{s:9:\"className\";s:43:\"plugins.generic.pln.classes.tasks.Depositor\";s:9:\"frequency\";a:1:{s:4:\"hour\";s:2:\"25\";}s:4:\"args\";a:1:{i:0;s:9:\"autoStage\";}}i:2;a:3:{s:9:\"className\";s:48:\"plugins.importexport.datacite.DataciteInfoSender\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}i:3;a:3:{s:9:\"className\";s:48:\"plugins.importexport.crossref.CrossrefInfoSender\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}i:4;a:3:{s:9:\"className\";s:48:\"plugins.importexport.crossref.CrossrefInfoSender\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}i:5;a:3:{s:9:\"className\";s:48:\"plugins.importexport.crossref.CrossrefInfoSender\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}i:6;a:3:{s:9:\"className\";s:28:\"classes.tasks.ReviewReminder\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}i:7;a:3:{s:9:\"className\";s:40:\"classes.tasks.SubscriptionExpiryReminder\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}i:8;a:3:{s:9:\"className\";s:36:\"classes.tasks.OpenAccessNotification\";s:9:\"frequency\";a:1:{s:4:\"hour\";i:24;}s:4:\"args\";a:0:{}}}','object'),('acronplugin','',0,'enabled','1','bool'),('coinsplugin','',0,'enabled','1','bool'),('developedbyblockplugin','',0,'context','2','int'),('developedbyblockplugin','',0,'enabled','1','bool'),('developedbyblockplugin','',0,'seq','0','int'),('donationblockplugin','',0,'context','2','int'),('donationblockplugin','',0,'enabled','1','bool'),('donationblockplugin','',0,'seq','5','int'),('fontsizeblockplugin','',0,'context','2','int'),('fontsizeblockplugin','',0,'enabled','1','bool'),('fontsizeblockplugin','',0,'seq','6','int'),('helpblockplugin','',0,'context','2','int'),('helpblockplugin','',0,'enabled','1','bool'),('helpblockplugin','',0,'seq','1','int'),('languagetoggleblockplugin','',0,'context','2','int'),('languagetoggleblockplugin','',0,'enabled','1','bool'),('languagetoggleblockplugin','',0,'seq','4','int'),('luceneplugin','',0,'autosuggest','1','bool'),('luceneplugin','',0,'autosuggestType','2','int'),('luceneplugin','',0,'customRanking','0','bool'),('luceneplugin','',0,'enabled','0','bool'),('luceneplugin','',0,'facetCategoryAuthors','1','bool'),('luceneplugin','',0,'facetCategoryCoverage','1','bool'),('luceneplugin','',0,'facetCategoryDiscipline','1','bool'),('luceneplugin','',0,'facetCategoryJournalTitle','1','bool'),('luceneplugin','',0,'facetCategoryPublicationDate','1','bool'),('luceneplugin','',0,'facetCategorySubject','1','bool'),('luceneplugin','',0,'facetCategoryType','1','bool'),('luceneplugin','',0,'highlighting','1','bool'),('luceneplugin','',0,'instId','localhost','string'),('luceneplugin','',0,'lastEmailTimestamp','0','int'),('luceneplugin','',0,'password','please change','string'),('luceneplugin','',0,'pullIndexing','0','bool'),('luceneplugin','',0,'searchEndpoint','http://localhost:8983/solr/ojs/search','string'),('luceneplugin','',0,'simdocs','1','bool'),('luceneplugin','',0,'spellcheck','1','bool'),('luceneplugin','',0,'username','admin','string'),('mods34metadataplugin','',0,'metadataPluginControlledVocabInstalled','1','bool'),('navigationblockplugin','',0,'context','2','int'),('navigationblockplugin','',0,'enabled','1','bool'),('navigationblockplugin','',0,'seq','5','int'),('nlm30metadataplugin','',0,'metadataPluginControlledVocabInstalled','1','bool'),('notificationblockplugin','',0,'context','2','int'),('notificationblockplugin','',0,'enabled','1','bool'),('notificationblockplugin','',0,'seq','3','int'),('openurl10metadataplugin','',0,'metadataPluginControlledVocabInstalled','1','bool'),('tinymceplugin','',0,'enabled','1','bool'),('usagestatsplugin','',0,'accessLogFileParseRegex','/^(\\S+) \\S+ \\S+ \\[(.*?)\\] \"\\S+ (\\S+).*?\" (\\S+) \\S+ \".*?\" \"(.*?)\"/','string'),('usagestatsplugin','',0,'createLogFiles','1','bool'),('usagestatsplugin','',0,'enabled','1','bool'),('userblockplugin','',0,'context','2','int'),('userblockplugin','',0,'enabled','1','bool'),('userblockplugin','',0,'seq','2','int');
/*!40000 ALTER TABLE `plugin_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `processes`
--

DROP TABLE IF EXISTS `processes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `processes` (
  `process_id` varchar(23) NOT NULL,
  `process_type` tinyint(4) NOT NULL,
  `time_started` bigint(20) NOT NULL,
  `obliterated` tinyint(4) NOT NULL DEFAULT '0',
  UNIQUE KEY `processes_pkey` (`process_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `processes`
--

LOCK TABLES `processes` WRITE;
/*!40000 ALTER TABLE `processes` DISABLE KEYS */;
/*!40000 ALTER TABLE `processes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `published_articles`
--

DROP TABLE IF EXISTS `published_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `published_articles` (
  `published_article_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) NOT NULL,
  `issue_id` bigint(20) NOT NULL,
  `date_published` datetime DEFAULT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `access_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`published_article_id`),
  UNIQUE KEY `published_articles_article_id` (`article_id`),
  KEY `published_articles_issue_id` (`issue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `published_articles`
--

LOCK TABLES `published_articles` WRITE;
/*!40000 ALTER TABLE `published_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `published_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queued_payments`
--

DROP TABLE IF EXISTS `queued_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queued_payments` (
  `queued_payment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `expiry_date` date DEFAULT NULL,
  `payment_data` text,
  PRIMARY KEY (`queued_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queued_payments`
--

LOCK TABLES `queued_payments` WRITE;
/*!40000 ALTER TABLE `queued_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `queued_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referral_settings`
--

DROP TABLE IF EXISTS `referral_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referral_settings` (
  `referral_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `referral_settings_pkey` (`referral_id`,`locale`,`setting_name`),
  KEY `referral_settings_referral_id` (`referral_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referral_settings`
--

LOCK TABLES `referral_settings` WRITE;
/*!40000 ALTER TABLE `referral_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `referral_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referrals`
--

DROP TABLE IF EXISTS `referrals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referrals` (
  `referral_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `article_id` bigint(20) NOT NULL,
  `status` smallint(6) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `link_count` bigint(20) NOT NULL,
  PRIMARY KEY (`referral_id`),
  UNIQUE KEY `referral_article_id` (`article_id`,`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referrals`
--

LOCK TABLES `referrals` WRITE;
/*!40000 ALTER TABLE `referrals` DISABLE KEYS */;
/*!40000 ALTER TABLE `referrals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_assignments`
--

DROP TABLE IF EXISTS `review_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_assignments` (
  `review_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `submission_id` bigint(20) NOT NULL,
  `reviewer_id` bigint(20) NOT NULL,
  `competing_interests` text,
  `regret_message` text,
  `recommendation` tinyint(4) DEFAULT NULL,
  `date_assigned` datetime DEFAULT NULL,
  `date_notified` datetime DEFAULT NULL,
  `date_confirmed` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `date_acknowledged` datetime DEFAULT NULL,
  `date_due` datetime DEFAULT NULL,
  `date_response_due` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `reminder_was_automatic` tinyint(4) NOT NULL DEFAULT '0',
  `declined` tinyint(4) NOT NULL DEFAULT '0',
  `replaced` tinyint(4) NOT NULL DEFAULT '0',
  `cancelled` tinyint(4) NOT NULL DEFAULT '0',
  `reviewer_file_id` bigint(20) DEFAULT NULL,
  `date_rated` datetime DEFAULT NULL,
  `date_reminded` datetime DEFAULT NULL,
  `quality` tinyint(4) DEFAULT NULL,
  `review_round_id` bigint(20) DEFAULT NULL,
  `stage_id` tinyint(4) NOT NULL DEFAULT '1',
  `review_method` tinyint(4) NOT NULL DEFAULT '1',
  `round` tinyint(4) NOT NULL DEFAULT '1',
  `step` tinyint(4) NOT NULL DEFAULT '1',
  `review_form_id` bigint(20) DEFAULT NULL,
  `unconsidered` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  KEY `review_assignments_submission_id` (`submission_id`),
  KEY `review_assignments_reviewer_id` (`reviewer_id`),
  KEY `review_assignments_form_id` (`review_form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_assignments`
--

LOCK TABLES `review_assignments` WRITE;
/*!40000 ALTER TABLE `review_assignments` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_form_element_settings`
--

DROP TABLE IF EXISTS `review_form_element_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_form_element_settings` (
  `review_form_element_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `review_form_element_settings_pkey` (`review_form_element_id`,`locale`,`setting_name`),
  KEY `review_form_element_settings_review_form_element_id` (`review_form_element_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_form_element_settings`
--

LOCK TABLES `review_form_element_settings` WRITE;
/*!40000 ALTER TABLE `review_form_element_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_form_element_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_form_elements`
--

DROP TABLE IF EXISTS `review_form_elements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_form_elements` (
  `review_form_element_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `review_form_id` bigint(20) NOT NULL,
  `seq` double DEFAULT NULL,
  `element_type` bigint(20) DEFAULT NULL,
  `required` tinyint(4) DEFAULT NULL,
  `included` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`review_form_element_id`),
  KEY `review_form_elements_review_form_id` (`review_form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_form_elements`
--

LOCK TABLES `review_form_elements` WRITE;
/*!40000 ALTER TABLE `review_form_elements` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_form_elements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_form_responses`
--

DROP TABLE IF EXISTS `review_form_responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_form_responses` (
  `review_form_element_id` bigint(20) NOT NULL,
  `review_id` bigint(20) NOT NULL,
  `response_type` varchar(6) DEFAULT NULL,
  `response_value` text,
  KEY `review_form_responses_pkey` (`review_form_element_id`,`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_form_responses`
--

LOCK TABLES `review_form_responses` WRITE;
/*!40000 ALTER TABLE `review_form_responses` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_form_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_form_settings`
--

DROP TABLE IF EXISTS `review_form_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_form_settings` (
  `review_form_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `review_form_settings_pkey` (`review_form_id`,`locale`,`setting_name`),
  KEY `review_form_settings_review_form_id` (`review_form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_form_settings`
--

LOCK TABLES `review_form_settings` WRITE;
/*!40000 ALTER TABLE `review_form_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_form_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_forms`
--

DROP TABLE IF EXISTS `review_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_forms` (
  `review_form_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `assoc_type` bigint(20) DEFAULT NULL,
  `assoc_id` bigint(20) DEFAULT NULL,
  `seq` double DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`review_form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_forms`
--

LOCK TABLES `review_forms` WRITE;
/*!40000 ALTER TABLE `review_forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_object_metadata`
--

DROP TABLE IF EXISTS `review_object_metadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_object_metadata` (
  `metadata_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `review_object_type_id` bigint(20) NOT NULL,
  `seq` double DEFAULT NULL,
  `metadata_type` bigint(20) DEFAULT NULL,
  `required` tinyint(4) DEFAULT NULL,
  `display` tinyint(4) DEFAULT NULL,
  `metadata_key` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`metadata_id`),
  KEY `review_object_metadata_metadata_id` (`metadata_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_object_metadata`
--

LOCK TABLES `review_object_metadata` WRITE;
/*!40000 ALTER TABLE `review_object_metadata` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_object_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_object_metadata_settings`
--

DROP TABLE IF EXISTS `review_object_metadata_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_object_metadata_settings` (
  `metadata_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `review_object_metadata_settings_pkey` (`metadata_id`,`locale`,`setting_name`),
  KEY `review_object_metadata_settings_metadata_id` (`metadata_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_object_metadata_settings`
--

LOCK TABLES `review_object_metadata_settings` WRITE;
/*!40000 ALTER TABLE `review_object_metadata_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_object_metadata_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_object_type_settings`
--

DROP TABLE IF EXISTS `review_object_type_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_object_type_settings` (
  `type_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `review_object_type_settings_pkey` (`type_id`,`locale`,`setting_name`),
  KEY `review_object_type_settings_type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_object_type_settings`
--

LOCK TABLES `review_object_type_settings` WRITE;
/*!40000 ALTER TABLE `review_object_type_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_object_type_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_object_types`
--

DROP TABLE IF EXISTS `review_object_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_object_types` (
  `type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `context_id` bigint(20) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `type_key` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`type_id`),
  KEY `review_object_type_type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_object_types`
--

LOCK TABLES `review_object_types` WRITE;
/*!40000 ALTER TABLE `review_object_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_object_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_rounds`
--

DROP TABLE IF EXISTS `review_rounds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review_rounds` (
  `review_round_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `submission_id` bigint(20) NOT NULL,
  `stage_id` bigint(20) DEFAULT NULL,
  `round` tinyint(4) NOT NULL,
  `review_revision` bigint(20) DEFAULT NULL,
  `status` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`review_round_id`),
  UNIQUE KEY `review_rounds_submission_id_stage_id_round_pkey` (`submission_id`,`stage_id`,`round`),
  KEY `review_rounds_submission_id` (`submission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_rounds`
--

LOCK TABLES `review_rounds` WRITE;
/*!40000 ALTER TABLE `review_rounds` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_rounds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `journal_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  UNIQUE KEY `roles_pkey` (`journal_id`,`user_id`,`role_id`),
  KEY `roles_journal_id` (`journal_id`),
  KEY `roles_user_id` (`user_id`),
  KEY `roles_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (0,1,1);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rt_contexts`
--

DROP TABLE IF EXISTS `rt_contexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_contexts` (
  `context_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `version_id` bigint(20) NOT NULL,
  `title` varchar(120) NOT NULL,
  `abbrev` varchar(32) NOT NULL,
  `description` text,
  `cited_by` tinyint(4) NOT NULL DEFAULT '0',
  `author_terms` tinyint(4) NOT NULL DEFAULT '0',
  `define_terms` tinyint(4) NOT NULL DEFAULT '0',
  `geo_terms` tinyint(4) NOT NULL DEFAULT '0',
  `seq` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`context_id`),
  KEY `rt_contexts_version_id` (`version_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rt_contexts`
--

LOCK TABLES `rt_contexts` WRITE;
/*!40000 ALTER TABLE `rt_contexts` DISABLE KEYS */;
/*!40000 ALTER TABLE `rt_contexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rt_searches`
--

DROP TABLE IF EXISTS `rt_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_searches` (
  `search_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `context_id` bigint(20) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` text,
  `url` text,
  `search_url` text,
  `search_post` text,
  `seq` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`search_id`),
  KEY `rt_searches_context_id` (`context_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rt_searches`
--

LOCK TABLES `rt_searches` WRITE;
/*!40000 ALTER TABLE `rt_searches` DISABLE KEYS */;
/*!40000 ALTER TABLE `rt_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rt_versions`
--

DROP TABLE IF EXISTS `rt_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rt_versions` (
  `version_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `version_key` varchar(40) NOT NULL,
  `locale` varchar(5) DEFAULT 'en_US',
  `title` varchar(120) NOT NULL,
  `description` text,
  PRIMARY KEY (`version_id`),
  KEY `rt_versions_journal_id` (`journal_id`),
  KEY `rt_versions_version_key` (`version_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rt_versions`
--

LOCK TABLES `rt_versions` WRITE;
/*!40000 ALTER TABLE `rt_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `rt_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheduled_tasks`
--

DROP TABLE IF EXISTS `scheduled_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scheduled_tasks` (
  `class_name` varchar(255) NOT NULL,
  `last_run` datetime DEFAULT NULL,
  UNIQUE KEY `scheduled_tasks_pkey` (`class_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheduled_tasks`
--

LOCK TABLES `scheduled_tasks` WRITE;
/*!40000 ALTER TABLE `scheduled_tasks` DISABLE KEYS */;
INSERT INTO `scheduled_tasks` VALUES ('classes.tasks.OpenAccessNotification','2016-04-01 08:15:49'),('classes.tasks.ReviewReminder','2016-04-01 08:15:49'),('classes.tasks.SubscriptionExpiryReminder','2016-04-01 08:15:49'),('plugins.generic.pln.classes.tasks.Depositor','2016-04-01 08:15:49'),('plugins.generic.usageStats.UsageStatsLoader','2016-04-01 08:15:49'),('plugins.importexport.crossref.CrossrefInfoSender','2016-04-01 08:15:49'),('plugins.importexport.datacite.DataciteInfoSender','2016-04-01 08:15:49');
/*!40000 ALTER TABLE `scheduled_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_editors`
--

DROP TABLE IF EXISTS `section_editors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_editors` (
  `journal_id` bigint(20) NOT NULL,
  `section_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `can_edit` tinyint(4) NOT NULL DEFAULT '1',
  `can_review` tinyint(4) NOT NULL DEFAULT '1',
  UNIQUE KEY `section_editors_pkey` (`journal_id`,`section_id`,`user_id`),
  KEY `section_editors_journal_id` (`journal_id`),
  KEY `section_editors_section_id` (`section_id`),
  KEY `section_editors_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_editors`
--

LOCK TABLES `section_editors` WRITE;
/*!40000 ALTER TABLE `section_editors` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_editors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section_settings`
--

DROP TABLE IF EXISTS `section_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `section_settings` (
  `section_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `section_settings_pkey` (`section_id`,`locale`,`setting_name`),
  KEY `section_settings_section_id` (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section_settings`
--

LOCK TABLES `section_settings` WRITE;
/*!40000 ALTER TABLE `section_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `section_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `review_form_id` bigint(20) DEFAULT NULL,
  `seq` double NOT NULL DEFAULT '0',
  `editor_restricted` tinyint(4) NOT NULL DEFAULT '0',
  `meta_indexed` tinyint(4) NOT NULL DEFAULT '0',
  `meta_reviewed` tinyint(4) NOT NULL DEFAULT '1',
  `abstracts_not_required` tinyint(4) NOT NULL DEFAULT '0',
  `hide_title` tinyint(4) NOT NULL DEFAULT '0',
  `hide_author` tinyint(4) NOT NULL DEFAULT '0',
  `hide_about` tinyint(4) NOT NULL DEFAULT '0',
  `disable_comments` tinyint(4) NOT NULL DEFAULT '0',
  `abstract_word_count` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`section_id`),
  KEY `sections_journal_id` (`journal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(128) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `ip_address` varchar(39) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created` bigint(20) NOT NULL DEFAULT '0',
  `last_used` bigint(20) NOT NULL DEFAULT '0',
  `remember` tinyint(4) NOT NULL DEFAULT '0',
  `data` text,
  `domain` varchar(255) DEFAULT NULL,
  UNIQUE KEY `sessions_pkey` (`session_id`),
  KEY `sessions_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('2s4tvqkugo1lt5jnlrattk04t7',NULL,'89.164.121.154','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0',1458140058,1458141252,0,'','morepress.unizd.hr'),('3l5vtdb5lrml2fgl3ho9is1td7',NULL,'161.53.204.192','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36',1458645634,1458645634,0,'','morepress.unizd.hr'),('6098q21tls7bb6b463lft91vg6',NULL,'93.143.16.77','Mozilla/5.0 (iPhone; CPU iPhone OS 9_2_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13D15 Safari/601.1',1458063363,1458063363,0,'','morepress.unizd.hr'),('73rdi8l0dt9of4f7ns3d9r81h2',NULL,'88.207.116.23','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0',1458047933,1458047933,0,'','morepress.unizd.hr'),('8cr2m6gfaj1hk8penp5760h2e7',NULL,'88.207.116.23','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0',1458169611,1458169611,0,'','morepress.unizd.hr'),('ajufuhkril9q06pclpf383qgo5',NULL,'161.53.204.192','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36',1459336669,1459336669,0,'','morepress.unizd.hr'),('b9nia4tg2tjr38fqcfclsf3t45',NULL,'93.143.16.77','Mozilla/5.0 (iPhone; CPU iPhone OS 9_2_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13D15 Safari/601.1',1458063359,1458063359,0,'','morepress.unizd.hr'),('c8us78ccahcs0evoahnkg11s85',NULL,'88.207.58.196','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0',1458048747,1458048747,0,'','morepress.unizd.hr'),('i8t1skhpgfd1g8ucfv0rnvbbr1',NULL,'161.53.27.4','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0',1459491349,1459491375,0,'','morepress.unizd.hr'),('iijiov5b853dpjcjnqngm21tq7',NULL,'188.252.154.76','Mozilla/5.0 (iPhone; CPU iPhone OS 9_2_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13D15 Safari/601.1',1457997787,1457997787,0,'','morepress.unizd.hr'),('j2kb0stsm6588luravtm8e6mc0',NULL,'88.207.127.137','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0',1458855877,1458855877,0,'','morepress.unizd.hr'),('ja1h9e4disd7of8aev0qdinhm1',NULL,'185.18.60.217','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0',1458652425,1458652433,0,'','morepress.unizd.hr'),('lkr7evddauqg1e69039v9namd7',NULL,'93.143.183.247','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0',1459120178,1459120206,0,'','morepress.unizd.hr'),('og59hcaccu71dm5bv5l810jb66',NULL,'161.53.28.22','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/601.4.4 (KHTML, like Gecko) Version/9.0.3 Safari/601.4.4',1458027705,1458027705,0,'','morepress.unizd.hr'),('otqo810b228u1hj9a3a1inu9f3',NULL,'161.53.28.4','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_1) AppleWebKit/601.2.7 (KHTML, like Gecko) Version/9.0.1 Safari/601.2.7',1458645161,1458645163,0,'','morepress.unizd.hr'),('p0bs45atr2cnv62kvck3h3dpc4',NULL,'109.60.79.136','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/601.5.17 (KHTML, like Gecko) Version/9.1 Safari/601.5.17',1459186493,1459186493,0,'','morepress.unizd.hr'),('pvcu89l5s283871kjgccidkmc1',NULL,'93.141.231.11','Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0',1459085404,1459085404,0,'','morepress.unizd.hr'),('qg63k27pob4l6aflof65nlcgr0',NULL,'161.53.204.192','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36',1459498615,1459498615,0,'','morepress.unizd.hr'),('qn0m4fle2da579skfufl0lc711',NULL,'193.198.208.162','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36',1458030570,1458030570,0,'','morepress.unizd.hr'),('rsql1m4iem0a7vmjtfsmdl2ou1',NULL,'89.201.152.242','Mozilla/5.0 (iPhone; CPU iPhone OS 9_2_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13D15 Safari/601.1',1457996634,1457996642,0,'','morepress.unizd.hr');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signoffs`
--

DROP TABLE IF EXISTS `signoffs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signoffs` (
  `signoff_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `symbolic` varchar(32) NOT NULL,
  `assoc_type` bigint(20) NOT NULL DEFAULT '0',
  `assoc_id` bigint(20) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `file_revision` bigint(20) DEFAULT NULL,
  `date_notified` datetime DEFAULT NULL,
  `date_underway` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `date_acknowledged` datetime DEFAULT NULL,
  `user_group_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`signoff_id`),
  UNIQUE KEY `signoff_symbolic` (`assoc_type`,`assoc_id`,`symbolic`,`user_id`,`user_group_id`,`file_id`,`file_revision`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signoffs`
--

LOCK TABLES `signoffs` WRITE;
/*!40000 ALTER TABLE `signoffs` DISABLE KEYS */;
/*!40000 ALTER TABLE `signoffs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `redirect` bigint(20) NOT NULL DEFAULT '0',
  `primary_locale` varchar(5) NOT NULL,
  `min_password_length` tinyint(4) NOT NULL DEFAULT '6',
  `installed_locales` varchar(255) NOT NULL DEFAULT 'en_US',
  `supported_locales` varchar(255) DEFAULT NULL,
  `original_style_file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (0,'hr_HR',6,'en_US:hr_HR','en_US:hr_HR',NULL);
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_settings` (
  `setting_name` varchar(255) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `site_settings_pkey` (`setting_name`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES ('contactEmail','en_US','fpehar@unizd.hr','string'),('contactName','en_US','Open Journal Systems','string'),('showDescription','','1','bool'),('showThumbnail','','1','bool'),('showTitle','','1','bool'),('title','en_US','Open Journal Systems','string');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_page_settings`
--

DROP TABLE IF EXISTS `static_page_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `static_page_settings` (
  `static_page_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` longtext,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `static_page_settings_pkey` (`static_page_id`,`locale`,`setting_name`),
  KEY `static_page_settings_static_page_id` (`static_page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_page_settings`
--

LOCK TABLES `static_page_settings` WRITE;
/*!40000 ALTER TABLE `static_page_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `static_page_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_pages`
--

DROP TABLE IF EXISTS `static_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `static_pages` (
  `static_page_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `journal_id` bigint(20) NOT NULL,
  PRIMARY KEY (`static_page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_pages`
--

LOCK TABLES `static_pages` WRITE;
/*!40000 ALTER TABLE `static_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `static_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_type_settings`
--

DROP TABLE IF EXISTS `subscription_type_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscription_type_settings` (
  `type_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `subscription_type_settings_pkey` (`type_id`,`locale`,`setting_name`),
  KEY `subscription_type_settings_type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_type_settings`
--

LOCK TABLES `subscription_type_settings` WRITE;
/*!40000 ALTER TABLE `subscription_type_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_type_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_types`
--

DROP TABLE IF EXISTS `subscription_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscription_types` (
  `type_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `cost` double NOT NULL,
  `currency_code_alpha` varchar(3) NOT NULL,
  `non_expiring` tinyint(4) NOT NULL DEFAULT '0',
  `duration` smallint(6) DEFAULT NULL,
  `format` smallint(6) NOT NULL,
  `institutional` tinyint(4) NOT NULL DEFAULT '0',
  `membership` tinyint(4) NOT NULL DEFAULT '0',
  `disable_public_display` tinyint(4) NOT NULL,
  `seq` double NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_types`
--

LOCK TABLES `subscription_types` WRITE;
/*!40000 ALTER TABLE `subscription_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `subscription_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `type_id` bigint(20) NOT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `date_reminded_before` datetime DEFAULT NULL,
  `date_reminded_after` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `membership` varchar(40) DEFAULT NULL,
  `reference_number` varchar(40) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`subscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporary_files`
--

DROP TABLE IF EXISTS `temporary_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temporary_files` (
  `file_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `file_name` varchar(90) NOT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` bigint(20) NOT NULL,
  `original_file_name` varchar(127) DEFAULT NULL,
  `date_uploaded` datetime NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `temporary_files_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporary_files`
--

LOCK TABLES `temporary_files` WRITE;
/*!40000 ALTER TABLE `temporary_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `temporary_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theses`
--

DROP TABLE IF EXISTS `theses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `theses` (
  `thesis_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `journal_id` bigint(20) NOT NULL,
  `status` smallint(6) NOT NULL,
  `degree` smallint(6) NOT NULL,
  `degree_name` varchar(255) DEFAULT NULL,
  `department` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `date_approved` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` text,
  `abstract` text,
  `comment` text,
  `student_first_name` varchar(40) NOT NULL,
  `student_middle_name` varchar(40) DEFAULT NULL,
  `student_last_name` varchar(90) NOT NULL,
  `student_email` varchar(90) NOT NULL,
  `student_email_publish` tinyint(4) DEFAULT '0',
  `student_bio` text,
  `supervisor_first_name` varchar(40) NOT NULL,
  `supervisor_middle_name` varchar(40) DEFAULT NULL,
  `supervisor_last_name` varchar(90) NOT NULL,
  `supervisor_email` varchar(90) NOT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `subject_class` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `coverage_geo` varchar(255) DEFAULT NULL,
  `coverage_chron` varchar(255) DEFAULT NULL,
  `coverage_sample` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT 'en',
  `date_submitted` datetime NOT NULL,
  PRIMARY KEY (`thesis_id`),
  KEY `theses_journal_id` (`journal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theses`
--

LOCK TABLES `theses` WRITE;
/*!40000 ALTER TABLE `theses` DISABLE KEYS */;
/*!40000 ALTER TABLE `theses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usage_stats_temporary_records`
--

DROP TABLE IF EXISTS `usage_stats_temporary_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usage_stats_temporary_records` (
  `assoc_id` bigint(20) NOT NULL,
  `assoc_type` bigint(20) NOT NULL,
  `day` bigint(20) NOT NULL,
  `metric` bigint(20) NOT NULL DEFAULT '1',
  `country_id` varchar(2) DEFAULT NULL,
  `region` varchar(2) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `load_id` varchar(255) NOT NULL,
  `file_type` tinyint(4) DEFAULT NULL,
  `entry_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usage_stats_temporary_records`
--

LOCK TABLES `usage_stats_temporary_records` WRITE;
/*!40000 ALTER TABLE `usage_stats_temporary_records` DISABLE KEYS */;
/*!40000 ALTER TABLE `usage_stats_temporary_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_interests`
--

DROP TABLE IF EXISTS `user_interests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_interests` (
  `user_id` bigint(20) NOT NULL,
  `controlled_vocab_entry_id` bigint(20) NOT NULL,
  UNIQUE KEY `u_e_pkey` (`user_id`,`controlled_vocab_entry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_interests`
--

LOCK TABLES `user_interests` WRITE;
/*!40000 ALTER TABLE `user_interests` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_interests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_settings`
--

DROP TABLE IF EXISTS `user_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_settings` (
  `user_id` bigint(20) NOT NULL,
  `locale` varchar(5) NOT NULL DEFAULT '',
  `setting_name` varchar(255) NOT NULL,
  `assoc_type` bigint(20) DEFAULT '0',
  `assoc_id` bigint(20) DEFAULT '0',
  `setting_value` text,
  `setting_type` varchar(6) NOT NULL,
  UNIQUE KEY `user_settings_pkey` (`user_id`,`locale`,`setting_name`,`assoc_type`,`assoc_id`),
  KEY `user_settings_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_settings`
--

LOCK TABLES `user_settings` WRITE;
/*!40000 ALTER TABLE `user_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salutation` varchar(40) DEFAULT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(90) NOT NULL,
  `suffix` varchar(40) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `initials` varchar(5) DEFAULT NULL,
  `email` varchar(90) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `phone` varchar(24) DEFAULT NULL,
  `fax` varchar(24) DEFAULT NULL,
  `mailing_address` varchar(255) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `country` varchar(90) DEFAULT NULL,
  `locales` varchar(255) DEFAULT NULL,
  `date_last_email` datetime DEFAULT NULL,
  `date_registered` datetime NOT NULL,
  `date_validated` datetime DEFAULT NULL,
  `date_last_login` datetime NOT NULL,
  `must_change_password` tinyint(4) DEFAULT NULL,
  `auth_id` bigint(20) DEFAULT NULL,
  `auth_str` varchar(255) DEFAULT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT '0',
  `disabled_reason` text,
  `inline_help` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_username` (`username`),
  UNIQUE KEY `users_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'morepress','$2y$10$4Z10QYjgFTMRFQvtcFphsOxCKEm/0Wa7BFVFf46z5.W/pW6kpvbzm',NULL,'morepress',NULL,'',NULL,NULL,NULL,'fpehar@unizd.hr',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'2016-03-14 23:10:19',NULL,'2016-03-14 23:10:59',0,NULL,NULL,0,NULL,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versions`
--

DROP TABLE IF EXISTS `versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versions` (
  `major` int(11) NOT NULL DEFAULT '0',
  `minor` int(11) NOT NULL DEFAULT '0',
  `revision` int(11) NOT NULL DEFAULT '0',
  `build` int(11) NOT NULL DEFAULT '0',
  `date_installed` datetime NOT NULL,
  `current` tinyint(4) NOT NULL DEFAULT '0',
  `product_type` varchar(30) DEFAULT NULL,
  `product` varchar(30) DEFAULT NULL,
  `product_class_name` varchar(80) DEFAULT NULL,
  `lazy_load` tinyint(4) NOT NULL DEFAULT '0',
  `sitewide` tinyint(4) NOT NULL DEFAULT '0',
  UNIQUE KEY `versions_pkey` (`product_type`,`product`,`major`,`minor`,`revision`,`build`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versions`
--

LOCK TABLES `versions` WRITE;
/*!40000 ALTER TABLE `versions` DISABLE KEYS */;
INSERT INTO `versions` VALUES (1,0,0,0,'2016-03-14 23:10:24',1,'plugins.metadata','mods34','',0,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.metadata','dc11','',0,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.metadata','nlm30','',0,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.metadata','openurl10','',0,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.auth','ldap','',0,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','donation','DonationBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','help','HelpBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','user','UserBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','subscription','SubscriptionBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','role','RoleBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','navigation','NavigationBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','authorBios','AuthorBiosBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','keywordCloud','KeywordCloudBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','notification','NotificationBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','information','InformationBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','readingTools','ReadingToolsBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','relatedItems','RelatedItemsBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:24',1,'plugins.blocks','developedBy','DevelopedByBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.blocks','languageToggle','LanguageToggleBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.blocks','fontSize','FontSizeBlockPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','refMan','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','cbe','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','mla','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','proCite','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','endNote','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','apa','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','refWorks','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','bibtex','',0,0),(1,1,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','abnt','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationFormats','turabian','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationLookup','worldcat','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationLookup','isbndb','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationLookup','pubmed','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationLookup','crossref','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationOutput','mla','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationOutput','apa','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationOutput','vancouver','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationOutput','abnt','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationParser','regex','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationParser','parscit','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationParser','freecite','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.citationParser','paracite','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.gateways','metsGateway','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.gateways','resolver','',0,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','coins','CoinsPlugin',1,0),(1,1,1,0,'2016-03-14 23:10:25',1,'plugins.generic','dataverse','DataversePlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','objectsForReview','ObjectsForReviewPlugin',1,1),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','customLocale','CustomLocalePlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','lucene','LucenePlugin',1,1),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','phpMyVisites','PhpMyVisitesPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','tinymce','TinyMCEPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','stopForumSpam','StopForumSpamPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','googleAnalytics','GoogleAnalyticsPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','usageEvent','UsageEventPlugin',0,1),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','openAds','OpenAdsPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','sword','SwordPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','thesisFeed','ThesisFeedPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:25',1,'plugins.generic','browse','BrowsePlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','usageStats','UsageStatsPlugin',0,1),(1,0,2,0,'2016-03-14 23:10:26',1,'plugins.generic','pln','PLNPlugin',1,0),(1,2,0,0,'2016-03-14 23:10:26',1,'plugins.generic','staticPages','StaticPagesPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','xmlGalley','XmlGalleyPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','thesis','ThesisPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','driver','DRIVERPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','backup','BackupPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','booksForReview','BooksForReviewPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','webFeed','WebFeedPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','referral','ReferralPlugin',1,0),(1,1,0,0,'2016-03-14 23:10:26',1,'plugins.generic','acron','AcronPlugin',1,1),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','googleViewer','GoogleViewerPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','announcementFeed','AnnouncementFeedPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','roundedCorners','RoundedCornersPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','externalFeed','ExternalFeedPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','sehl','SehlPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','pdfJsViewer','PdfJsViewerPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','translator','TranslatorPlugin',1,1),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.generic','piwik','PiwikPlugin',1,0),(1,1,0,0,'2016-03-14 23:10:26',1,'plugins.generic','openAIRE','OpenAIREPlugin',1,0),(1,1,0,0,'2016-03-14 23:10:26',1,'plugins.generic','customBlockManager','CustomBlockManagerPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.implicitAuth','shibboleth','',0,1),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','mets','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','quickSubmit','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','datacite','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','duracloud','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','medra','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','users','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','erudit','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','pubmed','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','native','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','doaj','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.importexport','pubIds','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.oaiMetadataFormats','nlm','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.oaiMetadataFormats','dc','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.oaiMetadataFormats','marc','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.oaiMetadataFormats','marcxml','',0,0),(1,0,0,0,'2016-03-14 23:10:26',1,'plugins.oaiMetadataFormats','rfc1807','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.paymethod','manual','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.paymethod','paypal','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.pubIds','doi','DOIPubIdPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.pubIds','urn','URNPubIdPlugin',1,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.reports','counterReport','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.reports','reviews','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.reports','subscriptions','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.reports','views','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.reports','articles','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.reports','timedViewReport','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','classicRed','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','classicNavy','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','classicBlue','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','uncommon','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','classicGreen','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','custom','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','classicBrown','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','lilac','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','desert','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','redbar','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','blueSteel','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','vanilla','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','steel','',0,0),(1,0,0,0,'2016-03-14 23:10:27',1,'plugins.themes','night','',0,0),(2,4,7,1,'2016-03-14 23:09:58',1,'core','ojs2','',0,1);
/*!40000 ALTER TABLE `versions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-01 10:20:16
