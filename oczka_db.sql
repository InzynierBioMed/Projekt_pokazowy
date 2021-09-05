SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `oczka_db` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `surename` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `oczka_db` (`id`, `name`, `surename`, `email`, `login`, `password`) VALUES
(2, 'Test', 'Testowy', 'test@gmail.com', 'test', 'admin');
ALTER TABLE `oczka_db`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `oczka_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;