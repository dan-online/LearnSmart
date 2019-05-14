

orest.onspeak = function (words) {
    const topic = words.join(" ").split(".");
    if(this.ego >= 50) {
        this.thoughts.push({thought: topic, fact: true});
        return this.listen({who: 'no one'});
    } else {
        this.thoughts.push({thoughs: topic, opinion: true});
        return this.listen({who: 'anyone'});
    }
}
        