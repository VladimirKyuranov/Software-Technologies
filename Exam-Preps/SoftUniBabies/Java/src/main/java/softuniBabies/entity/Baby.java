package softuniBabies.entity;

import javax.persistence.*;

@Entity
@Table(name = "babies")
public class Baby {
    private Integer id;
    private String name;
    private String gender;
    private String birthday;

    public Baby(String name, String gender, String birthday) {
        this.name = name;
        this.gender = gender;
        this.birthday = birthday;
    }

    public Baby() {
    }

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    @Column(name = "name", nullable = false, columnDefinition = "text")
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    @Column(name = "nickname", nullable = false, columnDefinition = "text")
    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getBirthday() {
        return birthday;
    }

    @Column(name = "price", nullable = false)
    public void setBirthday(String birthday) {
        this.birthday = birthday;
    }
}
