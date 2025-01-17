
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `formulaire` (
  `id` int(10) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prénom` varchar(200) NOT NULL,
  `email` varchar(202) NOT NULL,
  `téléphone` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `formulaire`
  MODIFY `nid` varchar(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;