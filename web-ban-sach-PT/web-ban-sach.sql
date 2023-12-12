

CREATE TABLE `svmuonsach` (
  `Cat_ID` varchar(100) NOT NULL,
  `Cat_Class` varchar(30) NOT NULL,
  `Cat_Fax` varchar(50) NOT NULL,
  `Cat_Book` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `svmuonsach` (`Cat_ID`, `Cat_Class`, `Cat_Fax`, `Cat_Book`) VALUES
('Hoài', 'K20CNTT1', '03865748331', 'Sách Toán 1'),
('Đăng', 'K20CNTT2', '03865748332', 'Sách Tiếng Anh 1'),
('Điện', 'K20CNTT3', '03865748333', 'Sách Tiếng Anh 4');


CREATE TABLE `books` ( 
  `Book_id` Int NOT NULL,
  `Bookname` varchar(300) NOT NULL,
  `Img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `books` (`Book_id`, `Bookname`, `Img`) VALUES
('1', 'Sách Tiếng Anh 12', '1'),
('2', 'Sách Tiếng Anh 3', '2');


CREATE TABLE `cart` ( 
  `Cart_id` Int NOT NULL,
  `book_id` Int NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Total_price`varchar(100) NOT NULL,
  `Quantity`varchar(100) NOT NULL,
  `user_id`Int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `login` (
  `User_id` Int NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `svmuonsach`
  ADD PRIMARY KEY (`Cat_ID`);


ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_id`);
  



ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_id`);
  ADD KEY `book_id` (`book_id`);
  ADD KEY `user_id` (`user_id`);


ALTER TABLE `login`
  ADD PRIMARY KEY (`User_id`),




ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`Book_id`);
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `login` (`User_id`);




