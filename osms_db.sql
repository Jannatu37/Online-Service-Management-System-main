-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 10:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin Kumar', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tb`
--

CREATE TABLE `assets_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assets_tb`
--

INSERT INTO `assets_tb` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'Keyboard', '2018-10-03', 3, 10, 400, 500),
(3, 'Mouse', '2018-10-02', 18, 30, 500, 600),
(4, 'Rode Mic', '2018-10-20', 9, 10, 15000, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE assignwork_tb (
  rno int(11) NOT NULL,
  request_id int(11) NOT NULL,
  request_info text NOT NULL,
  request_desc text NOT NULL,
  requester_name varchar(60) NOT NULL,
  requester_add1 text NOT NULL,
  requester_add2 text NOT NULL,
  requester_city varchar(60) NOT NULL,
  requester_state varchar(60) NOT NULL,
  requester_zip int(11) NOT NULL,
  requester_email varchar(60) NOT NULL,
  requester_mobile bigint(11) NOT NULL,
  assign_tech varchar(60) NOT NULL,
  assign_date date NOT NULL,
  payment_type varchar(30) NOT NULL,  -- New column for payment type
  payment_method varchar(30) NOT NULL  -- New column for payment method
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO assignwork_tb (
    rno, 
    request_id, 
    request_info, 
    request_desc, 
    requester_name, 
    requester_add1, 
    requester_add2, 
    requester_city, 
    requester_state, 
    requester_zip, 
    requester_email, 
    requester_mobile, 
    assign_tech, 
    assign_date, 
    payment_type, 
    payment_method
) VALUES
(6, 49, 'Home Maintenance', 'Plumbing, Electrical Work, Carpentry', 'Joy', '6565', '12 road', 'Dhaka', 'Dhaka', 6565, 'jay@gmail.com', 656567, 'Jay Kisan', '2024-10-14', 'Service', 'Credit Card'),
(7, 50, 'Appliance Repair and Installation', 'Refrigerator Repair, Oven Installation, Dishwasher Repair', 'Raj', '123', 'Sector Five', 'Chittagong', 'Chittagong', 123456, 'raj@gmail.com', 234234234, 'Kabir', '2024-10-16', 'Service', 'Debit Card'),
(8, 51, 'Cleaning Services', 'House Cleaning, Office Cleaning', 'Ria', '123', 'Sector Five', 'Sylhet', 'Sylhet', 123456, 'ria@gmail.com', 234234234, 'Jay', '2024-10-21', 'Service', 'Cash'),
(9, 52, 'IT and Technical Support', 'Computer Repair, Hardware Issues, Software Issues', 'Sanjia', 'House No. 123', 'Railway', 'Rajshahi', 'Rajshahi', 12345, 'rahul@gmail.com', 234566, 'Kunal', '2024-10-21', 'Service', 'Cheque'),
(10, 53, 'Gardening and Landscaping', 'Lawn Mowing, Trimming, Lawn Maintenance', 'Samia', 'house no 234', 'Sec 3', 'Khulna', 'Khulna', 674534, 'user@gmail.com', 52, 'Tech1', '2024-10-21', 'Service', 'Cash'),
(11, 54, 'Elderly Care and Support', 'Home Assistance, Medical Support', 'Meera', '12/1', 'Shitala Mandir', 'Barisal', 'Barisal', 700001, 'meera@gmail.com', 9876543210, 'Shubham', '2024-11-01', 'Service', 'Cheque'),
(12, 55, 'Childcare Services', 'Baby Sitting, Child Supervision', 'Rina', '34/2', 'Sector 5', 'Mymensingh', 'Mymensingh', 713205, 'rina@gmail.com', 9876543210, 'Ananya', '2024-11-05', 'Service', 'Debit Card'),
(13, 56, 'Paramedic Services', 'First Aid, Emergency Medical Assistance', 'Sakib', '56/3', 'New Town', 'Rajshahi', 'Rajshahi', 700157, 'sujit@gmail.com', 9000000000, 'Arvind', '2024-11-10', 'Service', 'Credit Card'),
(14, 57, 'Helping Hand', 'General Assistance, Errand Running', 'Arti', '89/4', 'Rumi', 'Narayanganj', 'Narayanganj', 700084, 'arti@gmail.com', 9123456789, 'Amit', '2024-11-12', 'Service', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) NOT NULL,
  `custadd` varchar(60) NOT NULL,
  `cpname` varchar(60) NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO customer_tb (custid, custname, custadd, cpname, cpquantity, cpeach, cptotal, cpdate) VALUES
(1, 'Rahim', 'Uttara', 'Mouse', 1, 600, 600, '2024-10-13'),
(2, 'Ayesha', 'Dhanmondi', 'Mouse', 2, 600, 1200, '2024-10-13'),
(3, 'Hasan', 'Banani', 'Mouse', 5, 600, 3000, '2024-10-13'),
(4, 'Farzana', 'Gulshan', 'Mouse', 2, 600, 1200, '2024-10-13'),
(5, 'Rashid', 'Mirpur', 'Mouse', 1, 600, 600, '2024-10-13'),
(6, 'Akash', 'Mohammadpur', 'Keyboard', 1, 500, 500, '2024-10-13'),
(7, 'Fahmida', 'Tejgaon', 'Keyboard', 1, 500, 500, '2024-10-09'),
(8, 'Imran', 'Bashundhara', 'Keyboard', 2, 500, 1000, '2024-10-21'),
(9, 'Sohail', 'Jatrabari', 'Keyboard', 1, 500, 500, '2024-10-20'),
(10, 'Rifat', 'Farmgate', 'Keyboard', 1, 500, 500, '2024-10-20'),
(11, 'Salma', 'Shyamoli', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(19, 'Rony', 'Wari', 'Keyboard', 1, 500, 500, '2024-10-20'),
(20, 'Arifa', 'Badda', 'Keyboard', 1, 500, 500, '2024-10-20'),
(21, 'Ratul', 'Motijheel', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(22, 'Shapla', 'Paltan', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(23, 'Rubel', 'Malibagh', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(24, 'Nafisa', 'Kawran Bazar', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(25, 'Saif', 'Rampura', 'Mouse', 1, 600, 600, '2024-10-20'),
(26, 'Mehedi', 'Kalabagan', 'Samsung LCD', 1, 12000, 12000, '2024-10-20'),
(27, 'Irfan', 'Savar', 'Mouse', 1, 600, 600, '2024-10-20'),
(28, 'Kamal', 'Dhanmondi', 'Rode Mic', 1, 18000, 18000, '2024-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(9, '  Sheeba', 'sheeba@gmail.com', 'user123'),
(10, '  Shami', 'fire@gmail.com', '22331'),
(11, 'Jay', 'jay@gmail.com', 'jay123'),
(12, 'nova', 'nova01@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `request_type` varchar(255),
  `payment_method` varchar(255),
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (
  `request_info`, 
  `request_desc`, 
  `request_type`, 
  `payment_method`, 
  `requester_name`, 
  `requester_add1`, 
  `requester_add2`, 
  `requester_city`, 
  `requester_state`, 
  `requester_zip`, 
  `requester_email`, 
  `requester_mobile`, 
  `request_date`
) VALUES
(
  'Home Maintenance', 
  'Need plumbing services for a leaking sink.', 
  'Plumbing', 
  'Master Card', 
  'John Doe', 
  '123 Main St', 
  'Apt 4B', 
  'New York', 
  'NY', 
  10001, 
  'john.doe@example.com', 
  1234567890, 
  '2023-10-20'
),
(
  'IT Support', 
  'Computer not starting, need urgent help.', 
  'Technical Support', 
  'Bkash', 
  'Jane Smith', 
  '456 Elm St', 
  '', 
  'Los Angeles', 
  'CA', 
  90001, 
  'jane.smith@example.com', 
  9876543210, 
  '2023-10-21'
),
(
  'Cleaning Service', 
  'Request for deep cleaning of the house.', 
  'Cleaning', 
  'Visa Card', 
  'Alice Johnson', 
  '789 Oak St', 
  'Suite 5', 
  'Chicago', 
  'IL', 
  60601, 
  'alice.johnson@example.com', 
  5551234567, 
  '2023-10-22'
);
-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) NOT NULL,
  `empCity` varchar(60) NOT NULL,
  `empMobile` bigint(11) NOT NULL,
  `empEmail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(12, 'Tech1', 'Delhi 4', 1234, 'tech@gmail.com');

--
-- Indexes for dumped tables
--
-- Create the payment table
CREATE TABLE `payment_tb` (
  `payment_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `payment_method` varchar(60) COLLATE utf8_bin NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Add primary key
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`payment_id`);

-- Set auto-increment for payment_id
ALTER TABLE `payment_tb`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- Insert values into the payment table
INSERT INTO `payment_tb` (`request_id`, `payment_method`, `amount`, `payment_date`) VALUES
(50, 'Master Card', 1500.00, '2023-10-20'),
(51, 'Bkash', 2000.00, '2023-10-21'),
(52, 'Visa Card', 2500.00, '2023-10-22');
--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assets_tb`
--
ALTER TABLE `assets_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_tb`
--
ALTER TABLE `assets_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
