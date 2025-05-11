-- User table
CREATE TABLE user (
    id TEXT,
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    PRIMARY KEY (id(255))  
);

-- Event table
CREATE TABLE event (
    id TEXT,
    title TEXT NOT NULL,
    description TEXT,
    max_aud INT NOT NULL,
    time DATETIME NOT NULL,
    img_url TEXT,
    location TEXT NOT NULL,
    PRIMARY KEY (id(255))  
);

-- Ticket table
CREATE TABLE ticket (
    id TEXT,
    userid TEXT NOT NULL,
    eventid TEXT NOT NULL,
    count INT NOT NULL,
    food_service BOOLEAN DEFAULT FALSE,
    vip_tickets BOOLEAN DEFAULT FALSE,
    children_tickets BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (id(255)),  
    FOREIGN KEY (userid(255)) REFERENCES user(id(255)),
    FOREIGN KEY (eventid(255)) REFERENCES event(id(255))
);