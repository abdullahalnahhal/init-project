class Chatting
{
    socket;

    constructor()
    {
        this.socket = io.connect('http://localhost:3000');
        this.socket.emit('add user', 'ss');
    }

    send(event, data, to = null)
    {
        data = {
            to : to,
            data : data
        };

        this.socket.emit(event, data);
    }

    listen(event, callback)
    {
        this.socket.on(event, (data) => {
            callback(data);
        });
    }

    disconnect()
    {
        this.socket.disconnect();
    }
}

var chatting = new Chatting()
