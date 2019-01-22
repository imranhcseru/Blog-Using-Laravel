-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 09:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'imran', 'imranhosen133@gmail.com', 'Imran133');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `post_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `name`, `email`, `post_id`, `date`) VALUES
(1, 'adfsdaf', 'Imran', 'imranhosen133@gmail.com', 8, '0000-00-00'),
(2, 'adfsdaf', 'Imran', 'imranhosen133@gmail.com', 8, '0000-00-00'),
(3, 'Nice Post', 'Imran', 'imranhosen133@gmail.com', 8, '2019-01-15'),
(4, 'Nice Post', 'Imran', 'imranhosen133@gmail.com', 8, '2019-01-15'),
(5, 'Nice Post', 'Imran', 'imranhosen133@gmail.com', 8, '2019-01-15'),
(6, 'Nice Post', 'Imran', 'imranhosen133@gmail.com', 8, '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Imran', 'imranhosen133@gmail.com', 'ssadf', '0000-00-00'),
(2, 'Imran', 'imranhosen133@gmail.com', 'ssadf', '0000-00-00'),
(3, 'Imran', 'imranhosen133@gmail.com', 'sadfsadf', '0000-00-00'),
(4, 'Imran', 'imranhosen133@gmail.com', 'asfgkjasdfjksadf', '0000-00-00'),
(5, 'Imran', 'imranhosen133@gmail.com', 'asfgkjasdfjksadf', '0000-00-00'),
(6, 'Imran', 'imranhosen133@gmail.com', 'I want contact.', '0000-00-00'),
(7, 'Imran', 'imranhosen133@gmail.com', 'I want contact.', '0000-00-00'),
(8, 'Imran', 'imranhosen133@gmail.com', 'Nice Post', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `tag` text NOT NULL,
  `image` text,
  `article` text NOT NULL,
  `type` text NOT NULL,
  `create_date` date NOT NULL,
  `publish_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `tag`, `image`, `article`, `type`, `create_date`, `publish_date`, `update_date`) VALUES
(7, 'Considering how much has changed since 2000', 'web development', '1547500519.jpg', 'First edition of this book was printed, it’s amazing that the basic design\r\nof the Web has stayed so much the same.\r\nIn the early years the platform was volatile. It seemed like features changed\r\nevery week. We had the browser wars, with Netscape squaring off against all\r\ncomers and the WC3 bringing out new HTML standards every six months. But\r\nthen, with the predictable victory of the Redmond wehrmacht, everything\r\nsettled down.\r\nThis was a relief for Web designers, who were nearly driven out of their minds\r\nby the constant changes in code—and by the fact that we were making it up as\r\nwe went along.\r\nBut relief slowly faded into frustration.\r\nThe inflexibility of HTML, the lack of fonts, the adjustability of Web pages that\r\nmakes design so imprecise, the confusing array of screen resolutions and target\r\nbrowsers (even if they’re mostly Explorer)—these factors are all annoying.\r\nDesigners’ aggravation is compounded by the slow coagulation of a number of\r\nrestrictive conventions, like the use of banner ads. Not all conventions are bad&nbsp;of course. In fact, users like conventions—even if designers find them\r\nconstraining. For most people, it’s hard enough just to get the computer to\r\nwork.\r\nAnd while these conventions may change, there is one constant that never\r\nchanges: human nature. As radical and disruptive a social and commercial\r\nforce as the Internet has been, it has not yet caused a noticeable mutation in the\r\nspecies.\r\nAnd since we designers do not, as a rule, come into contact with actual human\r\nbeings, it is very helpful to know Steve Krug—or at least to have this\r\nbook—because Steve does know users. After more than a decade of this work he\r\ncontinues to look at each Web site like it’s the first one. You’ll find no buzz\r\nwords here: just common sense and a friendly understanding of the way we\r\nsee, the way we think, and the way we read.\r\nThe principles Steve shares here are going to stay the same, no matter what\r\nhappens with the Internet—with web conventions, or the operating system, or\r\nbandwidth, or computer power. So pull up a chair and relax.', 'published', '2019-01-14', '2019-01-14', NULL),
(8, 'How Search Engines Work', 'search engine', '1547501186.png', 'Search engines have one objective – to provide you with the most relevant\r\nresults possible in relation to your search query. If the search engine is\r\nsuccessful in providing you with information that meets your needs, then you are\r\na happy searcher. And happy searchers are more likely to come back to the\r\nsame search engine time and time again because they are getting the results\r\nthey need.\r\nIn order for a search engine to be able to display results when a user types in a\r\nquery, they need to have an archive of available information to choose from.\r\nEvery search engine has proprietary methods for gathering and prioritizing\r\nwebsite content. Regardless of the specific tactics or methods used, this process\r\nis called indexing. Search engines actually attempt to scan the entire online\r\nuniverse and index all the information so they can show it to you when you enter\r\na search query.<div>How do they do it? Every search engine has what are referred to as bots, or\r\ncrawlers, that constantly scan the web, indexing websites for content and\r\nfollowing links on each webpage to other webpages. If your website has not been\r\nindexed, it is impossible for your website to appear in the search results. Unless\r\nyou are running a shady online business or trying to cheat your way to the top of\r\nthe search engine results page (SERP), chances are your website has already\r\nbeen indexed.</div>', 'published', '2019-01-14', '2019-01-14', NULL),
(9, 'State of the Industry', 'web analytics', '1547501337.png', 'As I reflect upon where we are today, I see a lot that has not changed from the very\r\nearly days of web analytics—all of about 15 years ago. The landscape is dominated by\r\ntools that primarily use data collected by web logs or JavaScript tags. Most companies\r\nuse tools from Google Analytics, Omniture Site Catalyst, Webtrends, Clicktracks, or\r\nXiti to understand what’s happening on their websites.\r\nHowever, one of the biggest changes in recent years was the introduction of a\r\nfree robust web analytics tool, Google Analytics. Web analytics had been mostly the\r\npurview of the rich (translation: big companies that could afford to pay). Sure, a few\r\nfree web log–based solutions existed, but they were hard to implement and needed\r\na good deal of IT caring and feeding, presenting a high barrier to entry for most\r\nbusinesses.\r\nGoogle Analytics’ biggest impact was to create a massive data democracy.\r\nAnyone could quickly add a few lines of JavaScript code to the footer file on their\r\nwebsite and possess an easy-to-use reporting tool. The number of people focusing on\r\nweb analytics in the world went from a few thousand to hundreds of thousands very\r\nquickly, and it’s still growing.\r\nThis process was only accelerated by Yahoo!’s acquisition of IndexTools in mid2008. Yahoo! took a commercial enterprise web analytics tool, cleverly rebranded it\r\nas Yahoo! Web Analytics, and released it into the wild for free (at this time only to\r\nYahoo! customers).\r\nOther free tools also arrived, including small innovators such as Crazy Egg,\r\nfree open source tools such as Piwik and Open Web Analytics, or niche tools such as\r\nMochiBot to track your Flash files. Some very affordable tools also entered the market,\r\nsuch as the very pretty and focused Mint, which costs just $30 and uses your web logs\r\nto report data.\r\nA search on Google today for free web analytics tools results in 49 million\r\nresults, a testament to the popularity of all these types of tools. All these free tools\r\nhave put the squeeze on the commercial web analytics vendors, pushing them to\r\nbecome better and more differentiated. Some have struggled to keep up, a few have\r\ngone under, but those that remain today have become more sophisticated or offer a\r\nmultitude of associative solutions.\r\nOmniture is a good example of a competitive vendor. SiteCatalyst, its flagship\r\nweb analytics tool, is now just one of its core offerings. Omniture now also provides\r\nTest&amp;Target, which is a multivariate testing and behavior targeting solution, and\r\nthe company entered the search bid management and optimization business with\r\nSearchCenter. It also offers website surveys, and it can now power ecommerce services\r\nthrough its acquisition of Mercado. Pretty soon Omniture will be able to wake you up\r\nwith a gentle tap and help you into your work clothes! As a result of this competitive\r\nstrategy, Omniture has done very well for itself and its shareholders thus far.\r\n29393c01.indd 3 9/16/09 8:35:00 PM\r\n4c h a p t e r 1: The Bold New\r\nWorld of\r\nW eb A na ly tics 2.0 ■\r\nBeyond web analytics, I am personally gratified to see so many other tools that\r\nexploit the Trinity strategy of Experience, Behavior, and Outcomes, which I presented\r\nin my first book, Web Analytics: An Hour a Day (Sybex, 2007).\r\nWe can now move beyond the limits of measuring Outcomes from web analytics tools, or conversions, to measuring more robust Outcomes, say our social media\r\nefforts. Obvious examples of this are using FeedBurner to measure Outcomes from\r\nblogs and using the diverse ecosystem of tools for Twitter to measure the success of\r\nyour happy tweeting existence. We are inching—OK, scraping—closer toward the\r\nHoly Grail of integrated online and offline Outcomes measurement.\r\nThe Behavior element of the strategy has not been neglected either. Inexpensive\r\nonline tools allow you to do card sorts (an expensive option offline) to get rapid customer input into redesigns on your websites’ information architecture (IA). A huge\r\nnumber of free survey tools are now available; allow me to selfishly highlight 4Q,\r\nwhich is a free on-exit survey from iPerceptions that was based on one of my blog posts\r\n(“The Three Greatest Survey Questions Ever”; http://sn.im/ak3gsqe).\r\nThen there is the adorable world of competitive intelligence. It did not have\r\nan official place in the Trinity strategy (though it was covered in Web Analytics: An\r\nHour A Day) because of the limited (and expensive) options in the market at that time.\r\nWe have had a massive explosion in this area in the past two years with tools that\r\ncan transform your business, such as Compete, Google’s Ad Planner and Insights for\r\nSearch, Quantcast...and I am just scratching the surface.\r\nReflecting on the early days of web analytics, I am very excited about the progress the industry has made since the publication of my last book a couple years ago.\r\nI am confident massive glory awaits the marketer, analyst, site owner, or CEO\r\nwho can harness the power of these free or commercial tools to understand customer\r\nexperience and competitive opportunities.', 'published', '2019-01-14', '2019-01-14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
