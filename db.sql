-- User table
CREATE TABLE hz_user (
    id CHAR(36) PRIMARY KEY DEFAULT UUID(),
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL
 
);

-- Event table
CREATE TABLE hz_event (
    id CHAR(36) PRIMARY KEY DEFAULT UUID(),
    title TEXT NOT NULL,
    description TEXT,
    max_aud INT NOT NULL,
    time DATETIME NOT NULL,
    img_url TEXT,
    location TEXT NOT NULL,
    userid CHAR(36) NOT NULL REFERENCES hz_user(id)
);

-- Ticket table
CREATE TABLE hz_ticket (
    id CHAR(36) PRIMARY KEY DEFAULT UUID(),
    userid CHAR(36) NOT NULL REFERENCES hz_user(id),
    eventid CHAR(36) NOT NULL REFERENCES hz_event(id),
    count INT NOT NULL,
    food_service BOOLEAN DEFAULT FALSE,
    vip_tickets BOOLEAN DEFAULT FALSE,
    children_tickets BOOLEAN DEFAULT FALSE
);

-- Feedback Table
CREATE TABLE hz_feedback (
    email TEXT NOT NULL,
    category TEXT NOT NULL,
    feedback TEXT NOT NULL, 
    rating INT NOT NULL 
);

Insert into hz_feedback (email, category, feedback, rating) VALUES
('stest1@g.com', 'testFeedback', 'good', 3),
('stest2@g.com', 'testFeedback', 'bad', 2);

-- -- drop tables ( use it if their changes in tables)
-- drop table hz_user;
-- drop table hz_event;
-- drop table hz_ticket;

-- seed the database

-- Insert sample users
INSERT INTO hz_user (email, password) VALUES
('alice@example.com', 'alice123'), -- password: alice123
('bob@example.com', 'bob123'),    -- password: bob123
('charlie@example.com', 'charlie123'); -- password: charlie123

-- Insert sample events
INSERT INTO hz_event (title, description, max_aud, time, img_url, location, userid) VALUES
('Tech Conference 2023', 'Annual technology conference with top speakers', 500, '2023-11-15 09:00:00', 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80', 'Convention Center, New York', (SELECT id FROM hz_user WHERE email = 'alice@example.com')),
('Music Festival', 'Weekend music festival with multiple stages', 10000, '2023-08-20 14:00:00', 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80', 'Central Park, Chicago', (SELECT id FROM hz_user WHERE email = 'bob@example.com')),
('Art Exhibition', 'Modern art exhibition featuring local artists', 200, '2023-09-05 10:00:00', 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80', 'Downtown Gallery, Seattle', (SELECT id FROM hz_user WHERE email = 'alice@example.com')),
('Food Fair', 'International food fair with cuisine from 20 countries', 800, '2023-07-30 11:00:00', 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1738&q=80', 'Waterfront Plaza, San Francisco', (SELECT id FROM hz_user WHERE email = 'charlie@example.com'));